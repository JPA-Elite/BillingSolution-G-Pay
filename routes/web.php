<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::view('/', 'register');
Route::view('/contact', 'contact');
Route::post('/register/create_account', [RegisterController::class, 'create_account']);

