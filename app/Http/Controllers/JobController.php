<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
  public function index()
  {
    return view('jobs.index', [
      'jobs' => Job::with('employer')->latest('updated_at')->paginate(7)
    ]);
  }

  public function create()
  {
    return view('jobs.create');
  }

  public function store() {
    request()->validate([
      'title' => 'required|min:3',
      'salary' => 'required',
    ]);
  
    $job = Job::create([
      'title' => request('title'),
      'salary' => request('salary'),
      'employer_id' => auth()->user()->employer->id,
    ]);
    Mail::to('Abdelali@example.com')->send(new JobPosted($job));
    return redirect('/jobs');
  }

  public function show(Job $job)
  {
    return view('jobs.show', [
      'job' => $job,
    ]);
  }

  public function edit(Job $job)
  {
    return view('jobs.edit', [
      'job' => $job,
    ]);
  }

  public function update(Job $job)
  {
    request()->validate([
      'title' => 'required|min:3',
      'salary' => 'required',
    ]);
    $job->update([
      'title' => request('title'),
      'salary' => request('salary'),
    ]);
    return redirect('/jobs');
  }

  public function destroy(Job $job)
  {
    $job->delete();
    return redirect('/jobs');
  }
}
