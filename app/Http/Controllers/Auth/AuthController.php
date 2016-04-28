<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(Request $data)
    {
        $imageName = '';

        if($data->hasFile('picture')){
            $destinationPath = 'uploads/images/';
            $picture = $data->file('picture');
            $imageName = time()."-".$picture->getClientOriginalName();
            $data->file('picture')->move($destinationPath, $imageName);

        }

        User::create([
            'firstname' => $data->firstname,
            'lastname' => $data->lastname,
            'email' => $data->email,
            'password' => bcrypt($data->password),
            'picture' => $imageName,
        ]);

        return redirect('/');

    }

    protected function login(Request $data)
    {
        $email = $data->email;
        $password = $data->password;

        if(Auth::attempt(['email' => $email, 'password' => $password])){

            return view('welcome');
        }

        return redirect('/');
    }

    protected function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
