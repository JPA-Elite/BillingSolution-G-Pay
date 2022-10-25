<?php

namespace App\Http\Controllers;

use App\Models\All_info;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use DB;
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


    protected function create_all_info_admin()
    {
        $register = new All_info();

        $f_name = $_COOKIE["first_name"];
        $l_name = $_COOKIE["last_name"];
        $location = $_COOKIE["address"];
        $phone = $_COOKIE["phone"];
        $email = $_COOKIE["email"];
        $password = $_COOKIE["pass"];

        $company_name = $_COOKIE["c_name"];
        $company_do = $_COOKIE["c_do"];
        $describe_business = $_COOKIE["d_busi"];
        $currency = $_COOKIE["c_type"];
        $estimate_revenue = $_COOKIE["es_rev"];
        $long_service = $_COOKIE["ser"];
        $current_bill = $_COOKIE["c_bill"];

        date_default_timezone_set('Asia/Manila');
        DB::table('profile_info')->insert([
            'first_name' => $f_name,
            'last_name' => $l_name,
            'Address' => $location,
            'phone' => $phone,
            'email' => $email,
            'password' =>  $password,
            'date' => date("F d, Y - h:i:s A")

        ]);

        DB::table('business_info')->insert([
            'company_name' => $company_name,
            'company_do' => $company_do,
            'describe_business' => $describe_business,
            'currency_type' => $currency,
            'estimate_revenue' => $estimate_revenue,
            'long_service' => $long_service,
            'current_bill' => $current_bill,
            'email' => $email,

        ]);

        return redirect('/gpay.com/users/')->with('status', 'Add user successfully!');
    }
}
