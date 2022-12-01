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

        // return "ok";
        if (Auth::attempt($credentials,$remember)) {
            // $user = User::create($credentials);
            return [
                "credentials" => $credentials,
                "user" => Auth::viaRemember(),
                "message" => "ok"
            ];
        }else{
            return [
                "credentials" => $credentials,
                "message" => "NOK"
            ];
        }



        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
    }
}
