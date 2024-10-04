<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('user_login', [ApiController::class, 'user_Login']);
Route::post('contact', [ApiController::class, 'Contact']);
Route::get('all-contact', [ApiController::class, 'All_Contact']);