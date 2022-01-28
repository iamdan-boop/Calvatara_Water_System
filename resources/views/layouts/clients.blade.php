@extends('layouts.app')

@section('content')
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
<button type="button" class="btn btn-primary ml-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>`
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">mike</th>
                    <th>089 brgy majada out calamba laguna</th>
                    <th>09331221958</th>
                    <th>08-21-05</th>
                    <th class="text-center">5</th>
                    <th>pending</th>
                    <th>
                        <button class="edit"><i class="fas fa-edit"></i></button>
                        <button class="delete"><i class="fas fa-trash"></i></button>
                    </th>
                  </tr>
                  <tr>
                    <th scope="row">mike</th>
                    <th>089 brgy majada out calamba laguna</th>
                    <th>09331221958</th>
                    <th>08-21-05</th>
                    <th class="text-center">5</th>
                    <th>pending</th>
                    <th>
                        <button class="edit"><i class="fas fa-edit"></i></button>
                        <button class="delete"><i class="fas fa-trash"></i></button>
                    </th>
                  </tr>
                  <tr>
                    <th>john michael buan</th>
                    <th>089 brgy majada out calamba laguna</th>
                    <th>09331221958</th>
                    <th>08-21-05</th>
                    <th class="text-center">5</th>
                    <th>pending</th>
                    <th>
                        <button class="edit"><i class="fas fa-edit"></i></button>
                        <button class="delete"><i class="fas fa-trash"></i></button>
                    </th>
                  </tr>
                </tbody>
              </table>
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
        <button type="button" class="closing" ><i class="fas fa-times"></i></button>
      </div>
      <div class="modal-body">
       
          <div class="form-group">
             <label>Client Number</label>
            <input class="form-control" name="cnumber"  placeholder="client Number" required>
            </div>
           <div class="form-group">
             <label>First Name</label>
            <input class="form-control" name="fname" placeholder="firstname" required>
            </div>
            <div class="form-group">
             <label>Middle Name</label>
            <input class="form-control" name="mi" placeholder="Middle name" required>
            </div>
             <div class="form-group">
             <label>Last Name</label>
            <input class="form-control" name="lname" placeholder="Lastname" required>
            </div>
             <div class="form-group">
             <label>Address</label>
            <input class="form-control" name="address" placeholder="Address" required>
            </div>
             <div class="form-group">
             <label>Contact</label>
            <input class="form-control" name="contact" placeholder="Contact" required>
            </div>
             <div class="form-group">
             <h4 class="modal-title">Required <span class="text-danger">*</span></h4>
             </div>
             <div class="form-group">
             <label>Meter Number</label>
            <input class="form-control" name="meternum" placeholder="Meter Number" required>
            </div>
            <div class="form-group">
             <label>First Meter Reading</label>
            <input class="form-control" name="meterReader" placeholder="First Meter Reading" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
      </div>
    
    </div>
  </div>
</div>
@endsection