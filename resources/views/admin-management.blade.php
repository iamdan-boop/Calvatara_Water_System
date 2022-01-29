@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 class="ml-2">
                Admin Management
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
                                Add New Admin
                            </button>
                        </div>
                        <!-- /.box-header -->
                        <div class="bills-con ml-5">
                            <table class="table bills text-center ml-3">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-5">ID</th>
                                        <th scope="col" class="px-5">Username</th>
                                        <th scope="col" class="px-5">Email</th>
                                        <th scope="col" class="px-5">User Type</th>
                                        {{-- <th scope="col" class="px-5">Password</th> --}}
                                        <th scope="col" class="px-5">Action</th>`
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admins as $admin)
                                        <tr>
                                            <th scope="row">{{ $admin->id }}</th>
                                            <th>{{ $admin->name }}</th>
                                            <th>{{ $admin->email }}</th>
                                            {{-- <th>{{ $admin->password }}</th> --}}
                                            <th>Admin</th>
                                            <th>
                                                <button type="button" class="edit" data-bs-toggle="modal"
                                            data-bs-target="#adminModal">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                                <form action="{{ route('admins.destroy', ['user' => $admin->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="delete"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                {{ $admins->render('pagination::bootstrap-4') }}
                            </div>
                        </div>

                        {{-- Modals --}}

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Admin</h5>
                                        <button type="button" class="closing"><i class="fas fa-times"></i></button>
                                    </div>
                                    <form action="{{ route('admins.store')}}" method="POST">
                                        @csrf
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label>Username</label>
                                                <input class="form-control" name="name" placeholder="JohnDoe029" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" name="email" placeholder="@gmail.com"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input class="form-control" name="password" placeholder="Password"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label>Retype Password</label>
                                                <input class="form-control" name="password_confirmation" placeholder="ReType Password"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                      {{-- Admin Modal --}}

      <div class="modal fade" id="adminModal" tabindex="-1" aria-labelledby="adminModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="adminModalLabel">Edit</h5>
                    <button type="button" class="closing"><i class="fas fa-times"></i></button>
                </div>
                <form action="{{ route('admins.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                           <span> {{ $admin->id }}</span>
                            <button class="edit-text" type="submit"><label for="#" class="label-text">edit</label></button>
                        </div>
                        <div class="form-group">
                            <span>{{ $admin->name }}</span>
                            <button class="edit-text" type="submit"><label for="#" class="label-text">edit</label></button>
                        </div>
                        <div class="form-group">
                            <span>{{ $admin->email }}</span>
                            <button class="edit-text" type="submit"><label for="#" class="label-text">edit</label></button>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
                @endsection