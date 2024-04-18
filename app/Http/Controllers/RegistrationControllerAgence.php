<?php

namespace App\Http\Controllers;

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
            'nom' => 'required|max:45',
            'adress' => 'required|max:445',
            'email' => 'required|email|max:45|unique:clients',
            'telephone' => 'required|max:45',
            'password' => 'required|min:3|max:15',
        ]);

        // Create a new Client instance and save to database
        $agence = new Agence();
        $agence->nomAgence = $validatedData['nom'];
        $agence->adress = $validatedData['adress'];
        $agence->email = $validatedData['email'];
        $agence->telephone = $validatedData['telephone'];
        $agence->password = bcrypt($validatedData['password']); // Hash the password
        $agence->save();

        // Redirect to a success page or wherever you want
        return redirect()->route('home')->with('success', 'Registration successful!');
    }
}
