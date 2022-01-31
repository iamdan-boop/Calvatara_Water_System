@extends('layouts.dashboard')

@section('dashboard-content')
    
<section class="content">
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4  for">

        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline ">
            <div class="box-header d-flex">
                <h6 class="bh px-1">Client Name: <span>John Michael Buan</span></h6>
                    <h6 class=" px-1">S.A Number: <span>_______</span></h6>
            </div>
        </form>
        <ul class="navbar-nav ml-auto d-flex">
            </li>
            <nav class="nav-item color">
               <button class="green-btn px-3 py-1"><i class="fas fa-share"></i></button>
            </nav>
        </ul>
    </nav>
    <div>
        <h6 class="black"><strong>Present Reading (cu.m)</strong></h6>
        <nav class="nav-item color mx-3">
            <input type="text" class="form-control bg-light  small searc" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
        </nav>
        <button class="calculate ml-4 mt-3"><i class="fas fa-money-bill-wave"></i> Calculate</button>
    </div>
</section>

@endsection