<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;


class GetListContractsController extends Controller
{
    public function Contracts()
    {
        // Retrieve the contracts associated with the authenticated agency
        $contracts = Contract::where('idagence', auth()->user()->id)->get();

        return view("dashboardAgence.contract", compact('contracts'));

    }
}
