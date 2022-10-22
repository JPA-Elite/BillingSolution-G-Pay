<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Business_info extends Eloquent
{
  protected $connection = 'mongodb';
  protected $collection = 'business_info';

  protected $fillable = [
    'id','company_name', 'company_do', 'describe_business', 'currency_type', 'estimate_revenue', 
    'long_service', 'current_bill', 'email'
  ];
}
