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
        $credentials = $request->only('email', 'password');
        // $credentials = $request->all();

        if (Auth::attempt([
            "email" => $credentials["email"],
            "password" =>bcrypt($credentials["password"])
        ])) {
            // $request->session()->regenerate();

            // return redirect()->intended('dashboard');
            return [
                "credentials" => $credentials,
                "message" => "ok"
            ];
        }else{
            return [
                "credentials" => $credentials,
                "message" => "nok"
            ];
        }



        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
    }
}
