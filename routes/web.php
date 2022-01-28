<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('index');
});

Route::get('/', function () {
    return view('login');
});
Route::get('/clients', function () {
    return view('layouts.clients');
});
Route::get('/clientBills', function () {
    return view('client-bills');
});
Route::get('/admin', function () {
    return view('admin-management');
});
Route::get('/editclientrecords', function () {
    return view('edit-client-records');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});





