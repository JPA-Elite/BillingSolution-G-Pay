<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class projects extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'projects';

    protected $fillable = [
        '_id', 'project_id', 'project_title', 'client_id', 'in_charge', 'deadline', 'date_created', 'status'
    ];
}
