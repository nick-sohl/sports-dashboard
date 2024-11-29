<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class LoginUserController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        // validate the form
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        // attempt to login the user
        Auth::attempt($attributes);

        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        // regenerate the session token
        request()->session()->regenerate();

        // redirect
        return redirect('/dashboard');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
