<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCreateUser;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Throwable;

class UserController extends Controller
{
    public function create(RequestCreateUser $request)
    {
        // $validator = $request->validated();

        // dd($request);
        // $validated = $request->validated();
        try {
            $user = User::create([
                'name' => $request->name,
                'matricula' => $request->matricula,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);
            return response()->json([
                "request" => $request,
                "user" => $user
            ], 200);
        } catch (ValidationException $e) {
            return response()->json(["erros" => "deu errado!"], 500);
        }
    }

    public function lisUsuarios(Request $request){
        try {
            $usuarios = User::all();
            return response()->json([
                "usuarios" => $usuarios
            ], 200);
        } catch (ValidationException $e) {
            return response()->json(["erros" => "deu errado!"], 500);
        }
    }

    public function teste()
    {
        return "ok";
        // return response()->json(['ok'=>'teste']);
    }
}
