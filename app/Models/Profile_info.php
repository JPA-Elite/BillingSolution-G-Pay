<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Profile_info extends Model
{
    function create_account($account){
        // DB::table('profile_info')->insert([
        //     'first_name' => $account->f_name,
        //     'last_name' => $account->l_name,
        //     'Address' => $account->location,
        //     'last_name' => $account->l_name,
        //     'phone' => $account->phone,
        //     'email' => $account->email,

        // ]);

        echo "<script>window.location.href = '/Gpay.com/sign_up-about_business/'</script>";
    }
}
