<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class ClientBillsController extends Controller
{
    public function index() {
        $clients = Client::orderBy('first_name', 'asc')->paginate(10);
        return view('client-bills', compact('clients'));
    }


    public function show(Client $client) {
        return view('client-billing-records', compact('client'));
    }


    public function computeAndCreateBill(Request $request, Client $client) {
        $request->validate([
            'cubic_meter' => 'required|numeric'
        ]);


        if ($client->type == 0) {
            return $this->computeResidential($request->cubic_meter, $client);
        }
    }



    public function computeResidential(int $cubic_meter, Client $client) {
        if ($cubic_meter > 0 && $cubic_meter <= 10) {
           
        }
        if ($cubic_meter > 10 && $cubic_meter <= 20) {
          
        }
        if ($cubic_meter > 20 && $cubic_meter <= 30) {
           
        }
        if ($cubic_meter > 30 && $cubic_meter <= 40) {
            
        }
        if ($cubic_meter > 40 && $cubic_meter <= 50) {
            
        }
        if ($cubic_meter > 40) {
          
        }
    }
}
