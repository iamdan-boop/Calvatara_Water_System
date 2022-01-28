@extends('layouts.app') 

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="ml-2">
      Client Bills
      </h1>
    </section>

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
                <tr>
                  <th scope="row">2212</th>
                  <th>john michael buan</th>
                  <th>calamba</th>
                  <th class="text-center">5</th>
                  <th>2122</th>
                  <th class="money-bills">  
                     <button class="bill-money"><i class="fas fa-money-bill"></i> </button>
                     <button class="eye"><i class="fas fa-eye"></i></button>
                 </th>
                </tr>
                <tr>
                  <th scope="row">2212</th>
                  <th>mike</th>
                  <th>calamba</th>
                  <th class="text-center">5</th>
                  <th>2122</th>
                   <th class="money-bills">  
                     <button class="bill-money"><i class="fas fa-money-bill"></i> </button>
                     <button class="eye"><i class="fas fa-eye"></i></button>
                 </th>
                </tr>
                <tr>
                  <th scope="row">2212</th>
                  <th>mike</th>
                  <th>calamba</th>
                  <th class="text-center">5</th>
                  <th>2122</th>
                   <th class="money-bills">  
                     <button class="bill-money"><i class="fas fa-money-bill"></i> </button>
                     <button class="eye"><i class="fas fa-eye"></i></button>
                 </th>
                </tr>
              </tbody>
            </table>
           </div>
@endsection