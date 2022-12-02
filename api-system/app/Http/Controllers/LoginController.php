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
            if($this->logged($user->id)['loged']){
                User::find($user->id)->tokens()->delete();
            }
            return [
                "credentials" => $credentials,
                "user" => $user,
                "current_token" => $user->createToken("token")->plainTextToken,
                "tokens" => User::find($user->id)->tokens(),
                "message" => "ok"
            ];
        }else{
            return [
                "credentials" => $credentials,
                "message" => "NOK"
            ];
        }
    }

    public function logout(Request $request){
        $id = $request->input('id');
        //---
        User::find($id)->tokens()->delete();
        //---
        Auth::logout();
        //---
        return [
            "logout" => true,
        ];
    }

    public function isLoged(Request $request){
        $id = $request->input('id');

        if($this->logged($id)['loged']){
            return [
                "loged" => true,
                "user" => $request->user(),
                "token" => $request->user()->currentAccessToken(),
                "tokens" => $this->logged($id)['tokens']
            ];
        }
        return [
            "loged" => false
        ];
    }

    private function logged($id){
        $tokens = PersonalAccessToken::where("tokenable_id",$id)->get();
        //---
        return [
            "loged" =>(count($tokens) > 0)?true:false,
            "tokens" => $tokens
        ];
    }
}
