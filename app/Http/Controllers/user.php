<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    protected function control()
    {
        setcookie('email_client', 'algad@gmail.com', time() + (86400 * 30), "/");
        return "<script>window.location.href ='/gpay.com/users/'; </script>";
    }
}
