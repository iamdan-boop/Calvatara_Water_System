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
        Client::create($request->validated() + ['status' => 0]);
        return back();
    }


    public function destroy(Client $user) {
        $user->delete();
        return back();
    }
}
