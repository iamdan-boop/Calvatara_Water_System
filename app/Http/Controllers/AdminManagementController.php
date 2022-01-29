<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdminRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminManagementController extends Controller
{
    public function index() {
        $admins = User::orderBy('name', 'asc')->paginate(10);
        return view('admin-management', compact('admins'));
    }


    public function store(CreateAdminRequest $request) {
        User::create($request->validated());
        return back();
    }

    public function destroy(User $user) {
        $user->delete();
        return back();
    }
}
