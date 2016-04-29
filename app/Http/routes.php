<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();


	


Route::group(['middleware' => ['web']], function () {

	
	Route::get('/', function () {
	        return view('welcome');
	    });
	Route::post('/auth/register', 'Auth\AuthController@create');
	Route::post('/auth/login', 'Auth\AuthController@login');
	Route::get('/post/buy', 'Post\PostController@storeBuy');
	Route::get('/post/sell', 'Post\PostController@storeSell');

});