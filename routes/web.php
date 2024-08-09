<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
  return view('jobs', [
    'jobs' => [
      [
        'id' => 1,
        'title' => 'Programmer',
        'salary' => '$10.000',
      ],
      [
        'id' => 2,
        'title' => 'Designer',
        'salary' => '$30.000',
      ],
      [
        'id' => 3,
        'title' => 'Manager',
        'salary' => '$70.000',
      ],
    ]
  ]);
});

Route::get('/job/{id}', function ($id) {
  $jobs = [
    [
      'id' => 1,
      'title' => 'Programmer',
      'salary' => '$10.000',
    ],
    [
      'id' => 2,
      'title' => 'Designer',
      'salary' => '$30.000',
    ],
    [
      'id' => 3,
      'title' => 'Manager',
      'salary' => '$70.000',
    ],
  ];
  $job = Arr::first($jobs, fn($job) => $job['id'] == $id );
  return view('job', [
    'job' => $job,
  ]);
});

Route::get('/contact', function () {
  return view('contact');
});
