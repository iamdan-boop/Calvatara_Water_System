@extends('layouts.app')


@section('content')

    @include('includes.navbar')
    <div class="container">
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
                                    <div class="text-center">

                                        <img src="{{ asset('assets/CalatravaLogo.jpg')}}" alt="Girl in a jacket" width="100" height="100">

                                        <br>
                                        <h1 class="h4 text-gray-900 mb-4">CALATRAVA WATERWORKS</h1>

                                        <h5>Login Here!</h5>

                                    </div>
                                    <form class="user" action="{{ route('login.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="username" name="email" class="form-control form-control-user"
                                                placeholder="Username...">
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group mt-2">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input"> <label
                                                    class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" name="login_btn"
                                            class="btn btn-primary btn-user btn-block mt-2">Login</button>
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
