<?php
namespace App\Http\Controllers;
use App\Models\Profile_info;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;

class Profile_info_Controller extends Controller
{
    protected function create_account(Request $account){
        $register = new Profile_info();
        return $register->create_account($account);
    }
}

