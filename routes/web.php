<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profile_info_Controller;
use App\Http\Controllers\Business_info_Controller;
use App\Http\Controllers\All_info_controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\user;

// Registration
Route::view('/gpay.com/register/', 'register/login');
Route::view('/gpay.com/sign_up-confirmation_email-address/send_mail/', 'register/mail');
Route::view('/gpay.com/sign_up-profile_information/', 'register/sign_up_profile_info');
Route::view('/gpay.com/sign_up-about_business/', 'register/sign_up_about_business');
Route::view('/gpay.com/sign_up-confirmation_email-address/', 'register/confirm_verification');

// Features
Route::view('/gpay.com/features-client/', 'features/features_client');
Route::view('/gpay.com/features-mobile/', 'features/features_mobile');
Route::view('/gpay.com/features-payments/', 'features/features_payments');
Route::view('/gpay.com/features-mileage-tracking/', 'features/features_mileage');
Route::view('/gpay.com/features-expenses&receipts/', 'features/features_expenses');
Route::view('/gpay.com/features-invoices/', 'features/features_invoices');
Route::view('/gpay.com/features-estimates/', 'features/features_estimates');

// Who its for
Route::view('/gpay.com/whoitsfor-self-employed-professionals/', 'whoitsfor/whoitsfor_self_employed');
Route::view('/gpay.com/whoitsfor-freelancers/', 'whoitsfor/whoitsfor_freelancers');
Route::view('/gpay.com/whoitsfor-business_with_constractor/', 'whoitsfor/whoitsfor_business_with_constractors');
Route::view('/gpay.com/whoitsfor-business_with_employees/', 'whoitsfor/whoitsfor_business_with_employees');
Route::view('/gpay.com/whoitsfor_unemployed/', 'whoitsfor/whoitsfor_unemployed');
Route::view('/gpay.com/whoitsfor_students/', 'whoitsfor/whoitsfor_students');

// Landing Page
Route::view('/gpay.com/homepage/', 'home');
Route::view('/gpay.com/about_us/', 'about');
Route::view('/gpay.com/pricing/', 'pricing');
Route::view('/gpay.com/demo/', 'demo');


// Dashboard Page
Route::view('/gpay.com/dashboard/', 'dashboard/index');
Route::view('/gpay.com/users/', 'dashboard/user-list-datatable');
Route::view('/gpay.com/projects/', 'dashboard/project-list');
Route::view('/gpay.com/analysis/', 'dashboard/analysis');
Route::view('/gpay.com/users/update_users', 'dashboard/user-update');


// Control request
Route::get('/gpay.com/sign_up-confirmation_email-address/send_mail/send_successfully', [All_info_controller::class, 'create_all_info']);
Route::post('/profile_info/create_account', [Profile_info_Controller::class, 'create_account']);
Route::post('/business_info/create_account', [Business_info_Controller::class, 'create_account']);
Route::post('/gpay.com/register/login', [RegisterController::class, 'register']);
Route::get('/gpay.com/register/user', [user::class, 'control']);

Route::get('/gpay.com/register/user/update',[user::class, 'update']);
Route::get('/gpay.com/register/user/delete',[user::class, 'delete']);
// Route::get('/', function () {
//     return view('register');
// });


