<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
   return view('welcome');
  
});*/
Route::get('/','HomeController@welcome');

Auth::routes();
Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/homeoriginal', 'HomeController@homeoriginal')->name('homeoriginal');


//Route::get('{path}', 'HomeController@index')->where('path','.*');
Route::get('{path}', 'HomeController@welcome')->where('path','.*');

