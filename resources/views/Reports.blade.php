@extends('layouts.dashboard')

@section('dashboard-content')
    
   <section class="ml-5 mt-5">
    <nav class="nav-item color">
        <input type="text" class="bg-light  small searchi" placeholder="Filter Search"
                    aria-label="Search" aria-describedby="basic-addon2">
    </nav>
    <table>
        <thead>
            <tr>
                <th scope="col" class="super p-1">Name</th>
                <th scope="col" class="super p-1">Route</th>
                <th scope="col" class="super p-1">Type</th>
                <th scope="col" class="super p-1">Meter Number</th>
                <th scope="col" class="super p-1">Stub-out Number</th>
                <th scope="col" class="super p-1">Consumption(cu.m)</th>
                <th scope="col" class="super p-1">Bill</th>
                <th scope="col" class="super p-1">Amount Paid</th>
                <th scope="col" class="super p-1">Date #being Paid</th>
                <th scope="col" class="super p-1">OR number #input</th>
                <th scope="col" class="super p-1">Status #paid/unpaid</th>
            </tr>
        </thead>
        <tbody class="super">
            <tr>
                <th class="p-1">John Michael M. Buan</th>
                <th class="p-1">Calamba</th>
                <th class="p-1">Active</th>
                <th class="p-1">43</th>
                <th class="p-1">10029</th>
                <th class="p-1">300.00</th>
                <th class="p-1">4,000.00</th>
                <th class="p-1">3,500.00</th>
                <th class="p-1">01-31-2022</th>
                <th class="p-1">02220</th>
                <th class="super p-1">unpaid</th>
            </tr>
        </tbody>
        <tbody class="super">
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
                <th class="super p-1">Total Number of Paid</th>
            </tr>
        </tbody>
   </section>
@endsection