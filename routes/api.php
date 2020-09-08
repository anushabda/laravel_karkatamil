<?php

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
Route::get('/category','API\CategoryController@index');
Route::get('/category/{category}','API\CategoryController@show');
Route::get('/basics','API\BasicController@index');
Route::get('/basics/{category}','API\BasicController@show');
Route::get('/suggestion','API\SuggestionController@index');
