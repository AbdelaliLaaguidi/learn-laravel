<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('home');
});

// Index
Route::get('/jobs', function () {
  return view('jobs.index', [
    'jobs' => Job::with('employer')->latest()->paginate(3),
  ]);
});

// Store
Route::post('/jobs', function () {
  request()->validate([
    'title' => 'required|min:3',
    'salary' => 'required',
  ]);

  Job::create([
    'title' => request('title'),
    'salary' => request('salary'),
    'employer_id' => 1,
  ]);
  return redirect('/jobs');
});

// Create
Route::get('/jobs/create', function () {
  return view('jobs.create');
});

// Show
Route::get('/jobs/{id}', function ($id) {
  return view('jobs.show', [
    'job' => Job::find($id),
  ]);
});

// Edit
Route::get('/jobs/{id}/edit', function ($id) {
  return view('jobs.edit', [
    'job' => Job::findOrFail($id),
  ]);
});

// Update
Route::patch('/jobs/{id}', function ($id) {
  request()->validate([
    'title' => 'required|min:3',
    'salary' => 'required',
  ]);
  $job = Job::findOrFail($id);
  $job->update([
    'title' => request('title'),
    'salary' => request('salary'),
  ]);
  return redirect('/jobs');
 });

//  Delete
Route::delete('/jobs/{id}', function ($id) {
  $job = Job::findOrFail($id);
  $job->delete();
  return redirect('/jobs');
});

// Contact
Route::get('/contact', function () {
  return view('contact');
});
