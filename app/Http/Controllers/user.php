<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\Business_info;
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
        $data2 = Register::where('id', '=', $_COOKIE['c_id']);
        $data3 = Business_info::where('email', '=', $_COOKIE['email']);


        if ($data2 != null && $data3 != null) {
            $data2->update([
                'first_name'=>  $_COOKIE['first_name'],
                'last_name'=>  $_COOKIE['first_name'],
                'Address'=>  $_COOKIE['first_name'],
                'phone'=>  $_COOKIE['first_name'],
                'email'=>  $_COOKIE['first_name'],
                'password'=>  $_COOKIE['first_name'],
            ]);

            $data3 -> update([
                'first_name'=>  $_COOKIE['first_name'],
                'last_name'=>  $_COOKIE['first_name'],
                'Address'=>  $_COOKIE['first_name'],
                'phone'=>  $_COOKIE['first_name'],
                'email'=>  $_COOKIE['first_name'],
                'password'=>  $_COOKIE['first_name'],
            ]);
            return "<script>window.location.href ='/gpay.com/users/'; </script>";
        }
    }
}
