<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Register;

class RegisterController extends Controller
{
    protected function register(Request $accounts){
        // $register = new Register();
        // return $register->create_account();


        // $posts = DB::select('select * from profile_info');
        // var_dump($posts);

        // $posts = DB::table('profile_info')->select('*')->get();

        $data=Register::where('email', ($accounts->email))->get();

        if ($data){
             foreach($data as $i){
            if (($i -> email) == ($accounts->email) && ($i -> password) == ($accounts->password)){
                echo "<script>window.location.href ='/Gpay.com/homepage/' </script>";

            }else{
                echo "<script>window.location.href ='/Gpay.com/register/' </script>";
            }
        }
    }else{
        
        echo "<script>window.location.href ='/Gpay.com/register/' </script>";
    }
    }
}
