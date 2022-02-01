<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index() {
      return view('home', [
        'user' => Client::count(),
        'admin' => User::count()
      ]);
  }
}
