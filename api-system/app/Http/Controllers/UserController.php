<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCreateUser;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Throwable;

class UserController extends Controller
{
    public function create(RequestCreateUser $request){
        // $validator = $request->validated();

        // dd($request);
        // $validated = $request->validated();
        try{
            return response()->json(["erros"=> "deu tudo certo"],200);
        }catch(Throwable $e){
            return response()->json(["erros"=> "deu tudo errado!"],500);
        }


        //---
        // User::create([
        //     'name' => $request->name,
        //     'email'=> $request->email,
        //     'password'=> $request->password
        // ]);
        // return response()->json($request,200);
    }

    public function teste(){
        return "ok";
        // return response()->json(['ok'=>'teste']);
    }
}
