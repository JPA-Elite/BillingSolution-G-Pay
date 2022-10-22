<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Register extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'profile_info';
    
    protected $fillable = [
        '_id', 'first_name', 'last_name','Address', 'phone', 'email', 'password'
    ];

}
