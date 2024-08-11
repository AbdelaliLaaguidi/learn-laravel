<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
  return view('job.index', [
    'jobs' => Job::with('employer')->latest()->paginate(3),
  ]);
});

Route::post('/jobs', function () {
  Job::create([
    'title' => request('title'),
    'salary' => request('salary'),
    'employer_id' => 1,
  ]);
  return redirect('/jobs');
});

Route::get('/job/create', function () {
  return view('job.create');
});

Route::get('/job/{id}', function ($id) {
  return view('job.show', [
    'job' => Job::find($id),
  ]);
});

Route::get('/contact', function () {
  return view('contact');
});
