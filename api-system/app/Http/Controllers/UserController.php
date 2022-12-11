<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCreateUser;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function pagination(Request $request,$page){
        try {
            // 10 linhas por page
            /**
             * 1 - 10
             * 10 - 20
             * 20 - 30
             */
            $offset = ($page*10)-10;
            $count = DB::table("user")->count();
            $usuarios = DB::table("user")->offset($offset)->limit(10)->get();
            // $usuarios = DB::table("user")->paginate(10);
            return response()->json([
                "usuarios" => $usuarios,
                "count" => $count
            ], 200);
        } catch (ValidationException $e) {
            return response()->json(["erros" => "deu errado!"], 500);
        }
    }

    public function getUsuarios(Request $request,$text){
        try {
            $users = DB::table("user")
                    // ->where("name","like","'ita%'")
                    ->whereRaw("name like '$text%'")
                    ->get();
            // $usuarios = null;
            return response()->json([
                "usuarios" => $users
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
