<?php

use App\User;
use App\Http\Controllers\Contrroller;
use App\Http\Controllers\User\UsersController;

use Illuminate\Http\Request;
use App\Http\Requests;

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
// Displays the homepage
Route::get('/', function () {
    return view('welcome');
});

// Diplays the current user's profile
Route::get('/user/{id}', 'User\UsersController@show');

//Make the changes to the user's table
Route::post('/user/update/{id}', 'User\UsersController@update');

//Change profile picture
Route::post('/user/edit/{id}', 'User\UsersController@edit');


Route::post('/register', function(){
    return view('home');
});

Route::group(['middleware' => 'web'], function () {
});
