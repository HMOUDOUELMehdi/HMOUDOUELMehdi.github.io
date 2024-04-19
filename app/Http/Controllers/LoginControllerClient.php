<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginControllerClient extends Controller
{
    public function showLoginForm()
    {
        return view('auth.loginClient');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('client')->attempt($request->only('email', 'password'))) {
            return redirect()->intended('/'); 
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }
}

