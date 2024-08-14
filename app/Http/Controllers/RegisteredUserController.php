<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
  public function create()
  {
    return view('auth.register');
  }

  public function store()
  {
    $attributes = request()->validate([
      'first_name' => ['required', 'string', 'max:255'],
      'last_name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'confirmed', 'min:8'],
    ]);
    $user = User::create($attributes);
    Auth::login($user);
    return redirect('/jobs');
  }
}
