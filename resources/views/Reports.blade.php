@extends('layouts.dashboard')

@section('dashboard-content')
    
   <section class=" mt-5">
    <input type="text" class="form-control bg-light border-0 small " placeholder="Search for..."
    aria-label="Search" aria-describedby="basic-addon2">    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Route</th>
                <th scope="col">Type</th>
                <th scope="col">Meter Number</th>
                <th scope="col">Stub-out Number</th>
                <th scope="col">Consumption(cu.m)</th>
                <th scope="col">Bill</th>
                <th scope="col">Amount Paid</th>
                <th scope="col">Date #being Paid</th>
                <th scope="col">OR number #input</th>
                <th scope="col">Status #paid/unpaid</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="p-1">John Michael M. Buan</th>
                <th class="p-1">Calamba</th>
                <th class="p-1">Active</th>
                <th class="p-1" class="ml-2">43</th>
                <th class="p-1">10029</th>
                <th class="p-1">300.00</th>
                <th class="p-1">4,000.00</th>
                <th class="p-1">3,500.00</th>
                <th class="p-1">01-31-2022</th>
                <th class="p-1">02220</th>
                <th class="p-1">unpaid</th>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <th class="p-1"></th>
                <th class="p-1"></th>
                <th class="p-1"></th>
                <th class="p-1"></th>
                <th class="p-1"></th>
                <th class="p-1">Total</th>
                <th class="p-1">Total</th>
                <th class="p-1">Total</th>
                <th class="p-1"></th>
                <th class="p-1"></th>
                <th class="p-1">Total Number of Paid</th>
            </tr>
        </tbody>
   </section>
@endsection