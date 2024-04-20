<?php

namespace App\Http\Controllers\Auth; 

use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use App\Models\Agence;

class RegistrationControllerAgence extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.registerAgence');
    }

    public function register(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'nomAgence' => 'required|max:45',
            'adress' => 'required|max:445',
            'email' => 'required|email|max:45|unique:agences',
            'telephone' => 'required|max:45',
            'password' => 'required|min:3|max:15',
        ]);

        // Hash the password
        $validatedData['password'] = bcrypt($validatedData['password']);

        // Create a new Agence instance and save to database
        Agence::create($validatedData);

        // Redirect to a success page or wherever you want
        return redirect()->route('home')->with('success', 'Registration successful!');
    }
}
