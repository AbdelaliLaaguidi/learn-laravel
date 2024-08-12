<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

// Homepage
Route::view('/', 'home');
// Contact
Route::view('/contact', 'contact');

Route::resource('/jobs', JobController::class);
