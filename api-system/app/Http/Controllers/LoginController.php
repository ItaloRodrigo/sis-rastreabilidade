<?php

namespace App\Http\Controllers;

use App\Models\PersonalAccessToken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function authenticate(Request $request)
    {
        $credentials = $request->only('matricula', 'password');
        $remember = $request->input('remember');
        //---
        if (Auth::attempt($credentials,$remember)) {
            $user = $request->user();
            //---
            if($this->logged($user->id)['logged']){
                User::find($user->id)->tokens()->delete();
            }
            return response()->json([
                // "credentials" => $credentials,
                "logged" => true,
                "user" => $user,
                "current_token" => $user->createToken("token")->plainTextToken,
                "tokens" => User::find($user->id)->tokens(),
                "message" => "ok"
            ],200);
        }else{
            return response()->json([
                    // "credentials" => $credentials,
                    "logged" => false,
                    "message" => "NOK"
                ],
                200
            );
        }
    }

    public function logout(Request $request){
        $id = $request->input('id');
        //---
        User::find($id)->tokens()->delete();
        //---
        // Auth::logout();
        //---
        return response()->json([
            "logout" => true
        ],
        200
        );
    }

    public function isLoged(Request $request,$id){
        // $id = $request->input('id');

        if($this->logged($id)['logged']){
            return response()->json([
                "loged" => true,
                "user" => $request->user(),
                "token" => $request->user()->currentAccessToken(),
                "tokens" => $this->logged($id)['tokens']
            ],
            200
            );
        }
        return response()->json([
            "loged" => false
        ],
        200
        );
    }

    private function logged($id){
        $tokens = PersonalAccessToken::where("tokenable_id",$id)->get();
        //---
        return [
            "logged" =>(count($tokens) > 0)?true:false,
            "tokens" => $tokens
        ];
    }
}
