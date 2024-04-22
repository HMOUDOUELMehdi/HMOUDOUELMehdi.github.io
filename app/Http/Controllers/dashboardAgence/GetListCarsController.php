<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture; 

class GetListCarsController extends Controller
{
    public function showCars()
    {
        $cars = Voiture::all();

        // Pass the cars data to the view
        return view("dashboardAgence.showListCars", compact('cars'));
    }
}
