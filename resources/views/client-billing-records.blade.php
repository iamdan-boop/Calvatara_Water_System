@extends('layouts.dashboard')

@section('dashboard-content')
    @livewire('client-billing-records', ['clientId' => $client->id])
@endsection