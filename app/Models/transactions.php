<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class transactions extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'transactions';

    protected $fillable = [
        '_id', 'from_email', 'to_email', 'amount', 'invoice_id', 'transac_date', 'status'
    ];
}
