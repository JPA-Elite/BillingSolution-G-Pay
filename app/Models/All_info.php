<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
session_start();
class All_info extends Model
{
    function create_all_info(
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
        $current_bill
    ) {
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
        echo "Email has been successfully sent to " . $_COOKIE["email"];
        setcookie("email_client", $email, time() + (86400 * 30), "/");
        $_SESSION['email'] = $email;
    }
}
