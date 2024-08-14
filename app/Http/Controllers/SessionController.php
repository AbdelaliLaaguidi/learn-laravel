<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string'],
        ]);
        if (Auth::attempt($attributes)) {
            return redirect('/jobs');
        }
        return redirect('/login')->withErrors(['email' => 'Your provided credentials could not be verified.']);
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
