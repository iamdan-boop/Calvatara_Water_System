<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class CalculateBillingController extends Controller
{
    
    public function show(Client $client) {
        return view('calculation', compact('client'));
    }
}
