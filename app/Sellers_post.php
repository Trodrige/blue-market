<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sellers_post extends Model
{
    protected $fillable = [
        'description',
        'category', 
        'user_id',
        'picture'
    ];
}
