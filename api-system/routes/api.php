<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('user')->group(function(){
    Route::get('teste', [UserController::class,'teste']);
    Route::post('create', [UserController::class,'create']);
});

Route::prefix('auth')->group(function(){
    Route::post('login', [LoginController::class,'authenticate']);
    Route::post('logout', [LoginController::class,'logout']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::prefix('auth')->group(function(){
        Route::get('isloged/{id}', [LoginController::class,'isLoged']);
    });
}); //15|vGjH9DdliFzRNx8vZL69v2nGXevPzMDRr5xCtahf

