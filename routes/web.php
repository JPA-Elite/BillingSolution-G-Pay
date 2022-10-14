<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profile_info_Controller;
use App\Http\Controllers\Business_info_Controller;
use App\Http\Controllers\All_info_controller;
use App\Http\Controllers\RegisterController;

Route::view('/Gpay.com/register/', 'login');
Route::view('/Gpay.com/demo/', 'demo');
Route::view('/Gpay.com/sign_up-confirmation_email-address/send_mail/', 'mail');
Route::view('/Gpay.com/sign_up-profile_information/', 'sign_up_profile_info');
Route::view('/Gpay.com/sign_up-about_business/', 'sign_up_about_business');
Route::view('/Gpay.com/sign_up-confirmation_email-address/', 'confirm_verification');
Route::view('/Gpay.com/homepage/', 'home');
Route::view('/Gpay.com/features-client/', 'features_client');
Route::view('/Gpay.com/features-mobile/', 'features_mobile');
Route::view('/Gpay.com/features-payments/', 'features_payments');
Route::view('/Gpay.com/features-mileage-tracking/', 'features_mileage');
Route::view('/Gpay.com/features-expenses&receipts/', 'features_expenses');
Route::view('/Gpay.com/features-invoices/', 'features_invoices');
Route::view('/Gpay.com/features-estimates/', 'features_estimates');
Route::view('/Gpay.com/about_us/', 'about');


Route::get('/Gpay.com/sign_up-confirmation_email-address/send_mail/send_successfully', [All_info_controller::class, 'create_all_info']);
Route::post('/profile_info/create_account', [Profile_info_Controller::class, 'create_account']);
Route::post('/business_info/create_account', [Business_info_Controller::class, 'create_account']);
Route::post('/Gpay.com/register/login', [RegisterController::class, 'register']);
// Route::get('/', function () {
//     return view('register');
// });


