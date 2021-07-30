<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
// header('Access-Control-Allow-Origin:  *');
// header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
// header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization'); 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//auth
Route::post('login', 'App\Http\Controllers\UserController@login');
Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'App\Http\Controllers\UserController@index');
    Route::post('add', 'App\Http\Controllers\UserController@store');
    Route::get('edit/{id}', 'App\Http\Controllers\UserController@edit');
    Route::put('update/{id}', 'App\Http\Controllers\UserController@update');
    // Route::delete('delete/{id}', 'App\Http\Controllers\UserController@destroy');
});


