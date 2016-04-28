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
//Route::get('/user/{id}', 'User\UsersController@show');
Route::get('/user/{id}', function(){
    //$user[] = DB::table('users')->where('id', '1')->first();
    $user = User::find(1);
    return view('users.profile', ['user' =>$user]);
});

//Make the changes to the user's table
Route::post('/user/update/{id}', function(Request $request, $id){
    $user = User::find($id);
    $image = null;

    if($request->hasFile('picture')){
        $destinationPath = 'uploads/images/';
        $picture = $request->file('picture');
        $image = time()."-".$picture->getClientOriginalName();
        $request->file('picture')->move($destinationPath, $image);
    }

    if(is_Null($image)){
        $image = $user->picture;
    }

    $user->update(['firstname' => $request->firstname,
                   'lastname' => $request->lastname,
                   'email' => $request->email,
                   'location' => $request->location,
                   'picture' => $image
                 ]);
    return redirect('/user/id');
});


Route::post('/register', function(){
    return view('home');
});

Route::group(['middleware' => 'web'], function () {
});
