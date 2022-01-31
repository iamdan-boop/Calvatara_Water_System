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
                                    <h1 class="h4 text-gray-900 my-4 mx-4">Admin Edit</h1>
                                </div>
                                    <form action="">
                                    @csrf
                                    <div class="form-group">
                                        <input type="name" name="name" class="form-control form-control-user"
                                            placeholder="Edit-Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                            placeholder="Edit-Email">
                                    </div>
                                    <div class="modal-footer">
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