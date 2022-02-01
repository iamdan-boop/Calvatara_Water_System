@extends('layouts.dashboard')

@section('dashboard-content')

    <div class="container">

        <!-- Outer Row -->
        <br>
        <br>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center d-flex">
                                        <img src="{{ asset('assets/CalatravaLogo.jpg') }}" alt="Girl in a jacket"
                                            width="50" height="45" class="my-3">
                                        <h1 class="h4 text-gray-900 mt-4 mx-4">Client Edit</h1>
                                    </div>
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div>{{ $error }}</div>
                                        @endforeach
                                    @endif
                                    <form action="{{ route('clients.update', ['client' => $client->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <input type="text" name="first_name" class="form-control form-control-user"
                                                value="{{ $client->first_name }}" placeholder="Firstname">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="middle_name" class="form-control form-control-user"
                                                value="{{ $client->middle_name }}" placeholder="Middlename">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="last_name" class="form-control form-control-user"
                                                value="{{ $client->last_name }}" placeholder="Lastname">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="address" class="form-control form-control-user"
                                                value="{{ $client->address }}" placeholder="Address">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="contact_number" value="{{ $client->contact_number }}"
                                                class="form-control form-control-user" placeholder="Contact">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="meter_number" class="form-control form-control-user"
                                                value="{{ $client->meter_number }}" placeholder="Meter Number">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="status" class="form-control form-control-user"
                                                value="{{ $client->status }}" placeholder="Status">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
