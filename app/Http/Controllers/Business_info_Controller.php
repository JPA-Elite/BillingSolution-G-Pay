<?php
namespace App\Http\Controllers;
use App\Models\Business_info;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;

class Business_info_Controller extends Controller
{
     protected function create_account(Request $account){
        $register = new Business_info();
        return $register->create_account($account);
    }
}
