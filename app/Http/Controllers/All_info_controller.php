<?php

namespace App\Http\Controllers;

use App\Models\All_info;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;

class All_info_controller extends Controller
{
    protected function create_all_info()
    {
        $register = new All_info();

        $f_name = $_COOKIE["f_name"];
        $l_name = $_COOKIE["l_name"];
        $location = $_COOKIE["location"];
        $phone = $_COOKIE["phone"];
        $email = $_COOKIE["email"];
        $password = $_COOKIE["password"];

        $company_name = $_COOKIE["company_name"];
        $company_do = $_COOKIE["company_do"];
        $describe_business = $_COOKIE["describe_business"];
        $currency = $_COOKIE["currency"];
        $estimate_revenue = $_COOKIE["estimate_revenue"];
        $long_service = $_COOKIE["long_service"];
        $current_bill = $_COOKIE["current_bill"];
        return $register->create_all_info(
            $f_name,
            $l_name,
            $location,
            $phone,
            $email,
            $password,
            $company_name,
            $company_do,
            $describe_business,
            $currency,
            $estimate_revenue,
            $long_service,
            $current_bill,
            
        );

       
    }
}


