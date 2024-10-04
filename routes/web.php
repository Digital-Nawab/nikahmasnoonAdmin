<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\EnquiryController;

// Route::get('/', function () {
//     return view('admin.login');
// });

Route::match(['get','post'], '/', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);

Route::get('dashboard', [AdminController::class, 'dashboard']);
// Register and user route 
Route::get('user-list', [RegistrationController::class, 'index']);
Route::get('user-details/{id}', [RegistrationController::class, 'index']);
Route::match(['get','post'], '/add-user', [RegistrationController::class, 'create']);
// Route::post('add-user', [RegistrationController::class, 'create']);
// complaint Route
Route::get('complaint-list', [ComplaintController::class, 'index']);
Route::get('complaint-details/{id}', [ComplaintController::class, 'create']);
// complaint Route
Route::get('add-package', [PackageController::class, 'index']);
Route::post('add-package', [PackageController::class, 'store']);
// complaint Route
Route::get('all-enquiry', [EnquiryController::class, 'index']);
Route::post('add-enquiry', [EnquiryController::class, 'store']);
