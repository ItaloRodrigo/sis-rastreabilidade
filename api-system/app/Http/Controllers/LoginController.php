<?php

namespace App\Http\Controllers;

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

    private function compare(){

    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('matricula', 'password');
        $remember = $request->input('remember');
        //---
        if (Auth::attempt($credentials,$remember)) {
            $user = $request->user();
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
        $user = User::find($id);

        $user->tokens()->delete();

        $ok = Auth::logout();


        return [
            "user" => $user,
            "new user" => $ok
        ];
    }

    public function isLoged(Request $request){
        $id = $request->input('id');
        $user = User::find($id);
        //---
        if($user->tokens() != null){
            return [
                "loged" => true,
                "tokens" => $user->tokens()->where('tokenable_id', $id)
            ];
        }
        return [
            "loged" => false
        ];
    }
}
