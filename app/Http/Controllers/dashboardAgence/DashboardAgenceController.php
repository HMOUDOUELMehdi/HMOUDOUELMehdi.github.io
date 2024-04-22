<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAgenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboardAgence.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboardAgence.createCars");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'matricule' => 'required',
            'modele' => 'required',
            'nombre_de_place' => 'required',
            'tarif' => 'required',
        ]);
        
        // Get the authenticated agency's ID
        dd($agencyId = Auth::guard('agence')->user()->idagence);
    
        // Create the car with the agency's ID
        Voiture::create(array_merge($request->all(), ['idagence' => $agencyId]));
         
        return redirect()->route('/');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
