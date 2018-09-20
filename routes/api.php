<?php

use Illuminate\Http\Request;

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


Route::get("url","UrlController@index");
Route::post("url/create","UrlController@create");
Route::get("url/{id}","UrlController@show");

Route::get("test","UrlController@test");

// Route::get("url/{id}","UrlController@show");

// redirectUrl
