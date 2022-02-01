@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 class="ml-2">
                Client Bills
            </h1>
        </section>
        <nav class="nav-item color">
            <input type="text" class="sear bg-light border-0 small" placeholder="Filter Search"
            aria-label="Search" aria-describedby="basic-addon2">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-info">
                        <!-- /.box-header -->
                        <div class="bills-con">
                            <table class="table  bills">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-5">S.A Number</th>
                                        <th scope="col" class="px-5">Name</th>
                                        <th scope="col" class="px-5">Route</th>
                                        <th scope="col" class="px-5">Meter Number</th>
                                        <th scope="col" class="px-5">Stub-out Number</th>
                                        <th scope="col" class="px-5">Tools</th>`
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr>
                                            <th scope="row">{{ $client->id }}</th>
                                            <th>{{ $client->first_name }} <span>{{ $client->middle_name }}</span>
                                                <span>{{ $client->last_name }}</span>
                                            </th>
                                            <th>{{ $client->address }}</th>
                                            <th class="text-center"> {{ $client->meter_number }} </th>
                                            <th>{{ $client->number }}</th>
                                            <th class="money-bills">
                                                <button class="eye"><a href="calculation"><i class="fas fa-eye"></a></i></button>
                                                <button class="bill-money"><a href="clientBillingrecords"><i class="fas fa-money-bill"></i></a></button>
                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
