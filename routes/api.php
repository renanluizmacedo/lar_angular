<?php

use App\Http\Controllers\PostControlador;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/',[PostControlador::class,'index']);
Route::post('/',[PostControlador::class,'store']);
Route::delete('/{id}',[PostControlador::class,'destroy']);
Route::get('/{id}',[PostControlador::class,'like']);
