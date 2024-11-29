<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        // validate the form
        $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', Password::min( 8 ), 'confirmed'],
        ]);
        // create the user in the database
        $user = User::create(
            $attributes
        );
        // log in the user
        Auth::login($user);
        // redirect somewhere
        return redirect('/dashboard');
    }
}
