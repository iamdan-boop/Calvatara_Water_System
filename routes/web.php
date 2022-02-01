<?php

use App\Http\Controllers\AdminManagementController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CalculateBillingController;
use App\Http\Controllers\ClientBillsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\DashboardController;
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

Route::redirect('/', '/login');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});


Route::get('/clientBillingrecords', function () {
    return view('client-billing-records');
});
Route::get('/reports', function () {
    return view('reports');
});
// Route::get('/calculation', function () {
//     return view('calculation');
// });


Route::get('/client-edit', function () {
    return view('client-edit');
});
Route::get('/admin-edit', function () {
    return view('admin-edit');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/client-bills', [ClientBillsController::class, 'index'])->name('clientbills.index');
    Route::get('/client/show/{client}', [ClientBillsController::class, 'show'])->name('clientbills.show');

    Route::get('/calculate/{client}', [CalculateBillingController::class, 'show'])->name('calculate.show');
    Route::resource('/clients', ClientsController::class);


    Route::get('/admins', [AdminManagementController::class, 'index'])->name('admins.index');
    Route::delete('/admins/{user}', [AdminManagementController::class, 'destroy'])->name('admins.destroy');
    Route::post('/admins', [AdminManagementController::class, 'store'])->name('admins.store');

});

