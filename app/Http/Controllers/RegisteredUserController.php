<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{


    /**
     * Show the form for creating a user.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::default(), 'confirmed'],
        ]);

        $user = User::create($data);

        Auth::login($user);
        return redirect('/jobs');
    }
}
