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
}
