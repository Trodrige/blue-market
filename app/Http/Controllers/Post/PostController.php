<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Buyers_post;
use App\Sellers_post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    
    public function __construct()
    {

    }
    public function storeBuy(Request $data)
    {
    	$imageName = '';

        if($data->hasFile('picture')){
            $destinationPath = 'uploads/images/';
            $picture = $data->file('picture');
            $imageName = time()."-".$picture->getClientOriginalName();
            $data->file('picture')->move($destinationPath, $imageName);

        }
        if(!Auth::check())
            return "hello world";

    	Buyers_post::create([
    			'description' => $data->description,
    			'picture' => $imageName,
    			'category' => $data->category,
    			'user_id' => Auth::user()->id,
    		]);
    }

    public function storeSell(Request $data)
    {
    	$imageName = '';

        if($data->hasFile('picture')){
            $destinationPath = 'uploads/images/';
            $picture = $data->file('picture');
            $imageName = time()."-".$picture->getClientOriginalName();
            $data->file('picture')->move($destinationPath, $imageName);

        }

    	Sellers_post::create([
    			'description' => $data->description,
    			'picture' => $imageName,
    			'category' => $data->category,
    			'user_id' => Auth::user()->id,
    		]);
    }
}
