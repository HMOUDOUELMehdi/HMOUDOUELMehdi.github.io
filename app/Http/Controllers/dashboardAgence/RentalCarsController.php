<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\Voiture;

class GetListClientController extends Controller
{
    public function showCars()
    {
        // Get the ID of the agency (You may retrieve it based on your authentication or other logic)
        $agencyId = auth()->user()->id; // Assuming the authenticated user is an agency and you have the necessary relationships set up

        // Retrieve the rental cars associated with the agency through contracts
        $cars = Voiture::whereHas('contracts', function ($query) use ($agencyId) {
            // Filter contracts by agency ID and date fin greater than now
            $query->where('idagence', $agencyId)
                  ->where('dateFin', '>', now());
        })->get();

        // Pass the rental cars data to the view
        return view("dashboardAgence.listrentalcars", compact('cars'));
    }
}
