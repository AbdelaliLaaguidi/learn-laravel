<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
  return view('jobs', [
    'jobs' => Job::all()
  ]);
});

Route::get('/job/{id}', function ($id) {
  return view('job', [
    'job' => Job::find($id),
  ]);
});

Route::get('/contact', function () {
  return view('contact');
});
