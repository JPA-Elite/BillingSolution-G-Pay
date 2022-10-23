<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\Business_info;
use DB;

session_start();

class user extends Controller
{
    protected function control()
    {



        setcookie('email_client', $_SESSION['email'], time() + (86400 * 30), "/");
        return "<script>window.location.href ='/gpay.com/users/'; </script>";
    }

    protected function delete()
    {
        $data2 = Register::find($_COOKIE['id_target']);

        if ($data2 != null) {
            $data2->delete();
            return "<script>window.location.href ='/gpay.com/users/'; </script>";
        }
    }

    protected function update()
    {

        // $data3 = Business_info::find($_COOKIE['email']);

        // echo  $_COOKIE['c_id'];
        // echo  $data3;
        // if ($data2 != null) {


        // $data3->company_name =  $_COOKIE['c_name'];
        // $data3->company_do =  $_COOKIE['c_do'];
        // $data3->describe_business = $_COOKIE['d_busi'];
        // $data3->currency_type =  $_COOKIE['c_type'];
        // $data3->estimate_revenue =  $_COOKIE['es_rev'];
        // $data3->long_service =  $_COOKIE['ser'];
        // $data3->current_bill =  $_COOKIE['c_bill'];
        // $data3->email =  $_COOKIE['email'];

        // $data3->save();


        // $data2->first_name =  $_COOKIE['first_name'];
        // $data2->last_name =  $_COOKIE['last_name'];
        // $data2->Address =  $_COOKIE['address'];
        // $data2->phone = $_COOKIE['phone'];
        // $data2->email =  $_COOKIE['email'];
        // $data2->password = $_COOKIE['pass'];
        // $data2->save();

        // $check = Register::find($_COOKIE['id_target']);

        // $db1 = DB::table('profile_info')->where('id', $_COOKIE['id_target']);
        // $db2 = DB::table('business_info')->where('email', $check->email);

        // if ($db1 != null && $db2 != null) {
        //     $db1->update([
        //         'first_name' =>  $_COOKIE['first_name'],
        //         'last_name' => $_COOKIE['last_name'],
        //         'Address' => $_COOKIE['address'],
        //         'phone' => $_COOKIE['phone'],
        //         'email' =>  $_COOKIE['email'],
        //         'password' =>  $_COOKIE['pass']
        //     ]);


        //     $db2->update([
        //         'company_name' =>  $_COOKIE['c_name'],
        //         'company_do' => $_COOKIE['c_do'],
        //         'describe_business' => $_COOKIE['d_busi'],
        //         'currency_type' => $_COOKIE['c_type'],
        //         'estimate_revenue' =>  $_COOKIE['es_rev'],
        //         'long_service' =>  $_COOKIE['ser'],
        //         'current_bill' => $_COOKIE['c_bill'],
        //         'email' => $_COOKIE['email']

        //     ]);

        // };

        Register::find($_COOKIE['id_target'])->update([
            'first_name' =>  $_COOKIE['first_name'],
            'last_name' => $_COOKIE['last_name'],
            'Address' => $_COOKIE['address'],
            'phone' => $_COOKIE['phone'],
            'email' =>  $_COOKIE['email'],
            'password' =>  $_COOKIE['pass']
        ]);
        Business_info::where('email', $_COOKIE['p_email'])->update([
            'company_name' =>  $_COOKIE['c_name'],
            'company_do' => $_COOKIE['c_do'],
            'describe_business' => $_COOKIE['d_busi'],
            'currency_type' => $_COOKIE['c_type'],
            'estimate_revenue' =>  $_COOKIE['es_rev'],
            'long_service' =>  $_COOKIE['ser'],
            'current_bill' => $_COOKIE['c_bill'],
            'email' => $_COOKIE['email']
        ]);


        return redirect('/gpay.com/users/');
    }
}
