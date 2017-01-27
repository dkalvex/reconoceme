<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => 'login'],function()
{
	Route::get('/', 'HomeController@index');
	Route::get('home', 'HomeController@index');
});

Route::get('home/index', 'Home\HomeController@index');
Route::post('login', 'login\LoginController@login');
Route::get('logout','login\LoginController@logout');
