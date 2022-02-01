@extends('layouts.app')



@section('content')

    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center p-5" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3 d-flex">
                    <img class="clt" src="/assets/CalatravaLogoTrans.png" alt="">
                    <p class="p-1">Calatrava WaterWorks</p>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item py-3">
                <a class="nav-link" href="{{ route('dashboard.index')  }}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading ">
                Main Navigation
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link collapsed" href="{{ route('clients.index') }}">
                    <i class="  fas fa-users"></i>
                    <span>Clients</span>
                </a>
            </li>
            <li class="nav-item py-2">
                <a class="nav-link collapsed" href="{{ route('clientbills.index') }}">
                    <i class="fas fa-money-bill"></i>
                    <span>Billing</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link collapsed" href="reports">
                    <i class="fas fa-th-list"></i>
                    <span>Reports</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading ">
                Features
            </div>

            <li class="nav-item py-1">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-envelope-open-text"></i>
                    <span>Push Notification</span>
                    <span class="badge badge-danger badge-counter">7</span></a>
            </li>
            <li class="nav-item py-1">
                <a class="nav-link" href="{{ route('admins.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Admin Management</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-bars"></i>
                            </button>
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Profile Dropdown (Visible Only XS) -->
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <div class="nav-item  dropdown drop mr-5 mt-1 no-arrow">
                            <a class="btn dropdown-toggle" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="img-profile rounded-circle  dropdown pic" src="/assets/akopogi.jpg" alt="">
                                   <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small pr-3 mt-4">{{ auth()->user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="userDropdown">
                              <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                          </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                @yield('dashboard-content')
            </div>
        </div>
    </div>
@endsection
