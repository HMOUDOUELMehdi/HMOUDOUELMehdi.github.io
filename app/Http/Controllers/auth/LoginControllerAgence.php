<?php

namespace App\Http\Controllers\Auth; 

use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;

class LoginControllerAgence extends Controller
{
    public function showLoginForm()
    {
        return view('auth.loginAgence');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('agence')->attempt($request->only('email', 'password'))) {
            return redirect()->intended('/'); 
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }
}

