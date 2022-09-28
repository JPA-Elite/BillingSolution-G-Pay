<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::view('/', 'login');
Route::view('/homepage', 'home');
Route::post('/register/create_account', [RegisterController::class, 'create_account']);

