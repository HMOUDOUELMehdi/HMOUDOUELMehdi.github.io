<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\Client;

class GetListClientController extends Controller
{
    public function showClients()
    {
        // Get the ID of the agency (You may retrieve it based on your authentication or other logic)
        $agencyId = auth()->user()->id; // Assuming the authenticated user is an agency and you have the necessary relationships set up

        // Retrieve the clients associated with the agency through contracts
        $clients = Client::whereHas('contracts', function ($query) use ($agencyId) {
            $query->where('idagence', $agencyId);
        })->get();

        // Pass the clients data to the view
        return view("dashboardAgence.listClient", compact('clients'));
    }
}
