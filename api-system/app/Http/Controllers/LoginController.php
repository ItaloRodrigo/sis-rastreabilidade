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
                "user" => Auth::user(),
                "current_token" => $user->createToken("token")->plainTextToken,
                "tokens" => $user->tokens(),
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
        $user = Auth::loginUsingId($id);
        $ok = Auth::logout();

        // $request->user()->currentAccessToken()->delete();
        // $user->tokens()->delete();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return [
            "user" => $user,
            "new user" => $ok
        ];
    }
}
