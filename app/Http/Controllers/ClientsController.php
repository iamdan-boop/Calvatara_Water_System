<?php

namespace App\Http\Controllers;

use App\Helpers\UserType;
use App\Http\Requests\CreateClientRequest;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index() {
        $clients = Client::orderBy('first_name', 'asc')->paginate(10);
        return view('layouts.clients', compact('clients'));
    }


    public function store(CreateClientRequest $request) {
        Client::create($request->validated());
        return back();
    }


    public function edit(Client $client) {
        return view('client-edit', compact('client'));
    }

    public function update(Request $request, Client $client) {
        // dd($request);
        $request->validate([
            'first_name' => 'required|string',
            'middle_name' => 'required|string',
            'last_name' => 'required|string',
            'address' => 'required|string',
            'contact_number' => 'required|string',
            'meter_number' => 'required|numeric',
            'status' => 'required',
        ]);
        $client->update($request->all());
        return back();
    }


    public function destroy(Client $client) {
        $client->delete();
        return back();
    }
}
