<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return "hello world";
});

Route::group(['prefix' => 'user'], function(){
    Route::get('/', [UserController::class, 'findAll']);
    Route::post('/', [UserController::class, 'create']);
    Route::put('/{user_id}', [UserController::class, 'update']);
    Route::delete('/{user_id}', [UserController::class, 'delete']);
});

Route::group(['prefix' => 'product'], function(){
    Route::get('/',[ProductController::class, 'findAll']);
    Route::post('/',[ProductController::class, 'create']);
    Route::put('/{product_id}',[ProductController::class, 'update']);
    Route::delete('/{product_id}',[ProductController::class, 'delete']);
});