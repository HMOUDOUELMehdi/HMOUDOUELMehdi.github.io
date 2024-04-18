<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class RegistrationControllerClient extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.registerClient');
    }

    public function register(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'nom' => 'required|max:45',
            'email' => 'required|email|max:45|unique:clients',
            'telephone' => 'required|max:45',
            'password' => 'required|min:3|max:15',
        ]);

        // Create a new Client instance and save to database
        $client = new Client();
        $client->nomClient = $validatedData['nom'];
        $client->email = $validatedData['email'];
        $client->telephone = $validatedData['telephone'];
        $client->password = bcrypt($validatedData['password']); // Hash the password
        $client->save();

        // Redirect to a success page or wherever you want
        return redirect()->route('home')->with('success', 'Registration successful!');
    }
}
