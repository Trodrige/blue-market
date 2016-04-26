<?php

use App\User;
use App\Http\Controllers\Contrroller;
use App\Http\Controllers\User\UsersController;

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
//Route::get('/user/{id}/edit', 'User\UsersController@show');
Route::get('/user/edit/{id}', function(){
    //$user[] = DB::table('users')->where('id', '1')->first();
    $user = User::find(1);
    return view('users.profile', ['user' =>$user]);
});


Route::post('/register', function(){
    return view('home');
});

Route::group(['middleware' => 'web'], function () {
});
