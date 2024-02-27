<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::view('navigation/about', 'navigation/about');
Route::view('navigation/contact-us', 'navigation/contact-us');
Route::view('navigation/gallery', 'navigation/gallery');
Route::view('navigation/appointment', 'navigation/appointment');


Route::as('nivatech.')->group(function () {
    Route::Get('auth', [AuthController::class, 'index'])->name('auth');
    Route::Get('signup', [AuthController::class, 'signup_page'])->name('signup.page');

});