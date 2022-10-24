<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class user_clients extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'user_clients';

    protected $fillable = [
        '_id', 'client_id', 'email'
    ];

}
