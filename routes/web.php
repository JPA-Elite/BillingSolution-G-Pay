<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::view('/Gpay.com/register/', 'login');
Route::view('/Gpay.com/demo/', 'demo');
Route::view('/Gpay.com/sign_up-profile_information/', 'sign_up_profile_info');
Route::view('/Gpay.com/sign_up-about_business/', 'sign_up_about_business');
Route::view('/Gpay.com/homepage/', 'home');
Route::view('/Gpay.com/features-client/', 'features_client');
Route::view('/Gpay.com/features-mobile/', 'features_mobile');
Route::view('/Gpay.com/features-payments/', 'features_payments');
Route::view('/Gpay.com/features-mileage-tracking/', 'features_mileage');
Route::view('/Gpay.com/features-expenses&receipts/', 'features_expenses');
Route::view('/Gpay.com/features-invoices/', 'features_invoices');
Route::view('/Gpay.com/features-estimates/', 'features_estimates');
Route::view('/Gpay.com/about_us/', 'about');
Route::post('/register/create_account', [RegisterController::class, 'create_account']);

