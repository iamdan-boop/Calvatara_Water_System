@extends('layouts.app')

@section('content')
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
 <button type="button" class="btn btn-primary ml-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
   Add New Admin
 </button>
             </div>
             <!-- /.box-header -->
           <div class="bills-con">
            <table class="table  bills">
              <thead>
                <tr>
                  <th scope="col" class="px-5">ID</th>
                  <th scope="col" class="px-5">Username</th>
                  <th scope="col" class="px-5">Email</th>
                  <th scope="col" class="px-5">Password</th>
                  <th scope="col" class="px-5">User-Type</th>
                  <th scope="col" class="px-5">Action</th>`
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <th>lieking029</th>
                  <th>johnmichaelbuan21@gmail.com</th>
                  <th>sheeshh</th>
                  <th>admin</th>
                  <th>
                    <button class="edit"><i class="fas fa-edit"></i></button>
                    <button class="delete"><i class="fas fa-trash"></i></button>
                </th>
                </tr>
                 <tr>
                  <th scope="row">1</th>
                  <th>lieking029</th>
                  <th>johnmichaelbuan21@gmail.com</th>
                  <th>sheeshh</th>
                  <th>admin</th>
                  <th>
                    <button class="edit"><i class="fas fa-edit"></i></button>
                    <button class="delete"><i class="fas fa-trash"></i></button>
                </th>
                </tr>
              <tr>
                <th scope="row">1</th>
                <th>lieking029</th>
                <th>johnmichaelbuan21@gmail.com</th>
                <th>sheeshh</th>
                <th>admin</th>
                <th>
                    <button class="edit"><i class="fas fa-edit"></i></button>
                    <button class="delete"><i class="fas fa-trash"></i></button>
                </th>
              </tr>
              </tbody>
            </table>
           </div>
           {{-- Modals --}}
           <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add New Admin</h5>
                  <button type="button" class="closing" ><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                 
                    <div class="form-group">
                       <label>Username</label>
                      <input class="form-control" name="text"  placeholder="JohnDoe029" required>
                      </div>
                     <div class="form-group">
                       <label>Email</label>
                      <input class="form-control" name="email" placeholder="@gmail.com" required>
                      </div>
                      <div class="form-group">
                       <label>Password</label>
                      <input class="form-control" name="password" placeholder="Password" required>
                      </div>
                       <div class="form-group">
                       <label>Retype Password</label>
                      <input class="form-control" name="password" placeholder="ReType Password" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
              
              </div>
            </div>
          </div>
@endsection