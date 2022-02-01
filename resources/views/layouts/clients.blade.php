@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 class="px-3">
                Client Records

            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary ml-5" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Register
                            </button>
                        </div>

                        <!-- /.box-header -->


                        <table class="table ml-3">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col">Meter Number</th>
                                    <th scope="col">StubOut-Number</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>`
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <th scope="row">{{ $client->first_name }} <span>{{ $client->middle_name }}</span>
                                            <span>{{ $client->last_name }}</span></th>
                                        <th>{{ $client->address }}</th>
                                        <th>{{ $client->contact_number }}</th>
                                        <th>{{ $client->created_at }}</th>
                                        <th class="text-center">{{ $client->meter_number }}</th>
                                        <th class="text-center">{{ $client->meter_number }}</th>
                                        <th>{{ $client->status == 0 ? 'Disconnected' : 'Active' }}</th>
                                        <th>
                                            <button type="button" class="edit">
                                                <a class="btn-edit" href="{{ route('clients.edit', ['client' => $client->id,])}}"><i class="fas fa-edit"></i></a>
                                            </button>
                                            {{-- <button class="edit"><i class="fas fa-edit"></i></button> --}}
                                            <form action="{{ route('clients.destroy', ['client' => $client->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            {{ $clients->render('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="closing"><i class="fas fa-times"></i></button>
                </div>
                <form action="{{ route('clients.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label><h6>First Name</h6></label>
                            <input class="form-control" name="first_name" placeholder="Firstname" required>
                        </div>
                        <div class="form-group">
                            <label><h6>Middle Initial</h6></label>
                            <input class="form-control" name="middle_name" placeholder="Middle name" required>
                        </div>
                        <div class="form-group">
                            <label><h6>Last Name</h6></label>
                            <input class="form-control" name="last_name" placeholder="Lastname" required>
                        </div>
                        <div class="form-group">
                            <label><h6>Address</h6></label>
                            <input class="form-control" name="address" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <label><h6>Contact</h6></label>
                            <input class="form-control" name="contact_number" placeholder="Contact" required>
                        </div>
                        <div class="form-group">
                            <h4 class="modal-title">Required <span class="text-danger">*</span></h4>
                        </div>
                        <div class="form-group">
                            <label><h6>Type</h6></label>
                                <select class="form-select form-control" aria-label="Default select example" name="type">
                                    <option selected>Open this select Type</option>
                                    <option value="0">Commercial</option>
                                    <option value="1">Residential</option>
                                  </select>
                        </div>
                        <div class="form-group">
                            <label><h6>Route</h6></label>
                                <select class="form-select form-control" aria-label="Default select example" name="route">
                                    <option selected>Open this select Route</option>
                                    <option value="San Isidro">San Isidro</option>
                                    <option value="Patun-An">Patun-An</option>
                                    <option value="Bantayanon">Bantayanon</option>
                                    <option value="Lo-ok">Lo-ok</option>
                                    <option value="Calampisawan">Calampisawan</option>
                                    <option value="Suba">Suba</option>
                                  </select>
                        </div>
                        <div class="form-group">
                            <label><h6>Status</h6></label>
                                <select class="form-select form-control" aria-label="Default select example" name="status">
                                    <option selected>Open this select Status</option>
                                    <option value="0">Active</option>
                                    <option value="1">Disconnected</option>
                                  </select>
                        </div>
                        </div>
                        <div class="form-group ml-3">
                            <label><h6>StubOut-Number</h6></label>
                            <input class="form-control" name="stub_number" placeholder="StubOut-Number" required>
                        </div>
                        <div class="form-group ml-3">
                            <label><h6>Meter Number</h6></label>
                            <input class="form-control" name="meter_number" placeholder="Meter Number" required>
                        </div>
                        <div class="form-group ml-3">
                            <label><h6>First Meter Reading</h6></label>
                            <input class="form-control" name="first_meter_reading" placeholder="First Meter Reading" required>
                        </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
