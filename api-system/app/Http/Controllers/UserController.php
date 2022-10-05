<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCreateUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function create(RequestCreateUser $request){
        dd($request);
        // $validator = $request->validated();

        return response()->json(["erros"=> $request],500);
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
