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

Route::get('/', function () {
        return view('welcome');
    });

Route::Post('/auth/register', 'Auth\AuthController@create');
Route::Post('/auth/login', 'Auth\AuthController@login');
Route::get('/post/buy', 'Post\PostController@storeBuy');
Route::get('/post/sell', 'Post\PostController@storeSell');

