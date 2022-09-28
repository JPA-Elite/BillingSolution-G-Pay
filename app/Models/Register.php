<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Register extends Model
{
    function create_account($account){
        DB::table('accounts')->insert([
            'email' => $account->email,
            'password' => $account->password
        ]);
    }
}
