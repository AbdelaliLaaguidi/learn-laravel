<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('/jobs', JobController::class);

// Login route
Route::get('/login', [SessionController::class, 'create']);
// Register route
Route::get('/register', [RegisteredUserController::class, 'create']);
