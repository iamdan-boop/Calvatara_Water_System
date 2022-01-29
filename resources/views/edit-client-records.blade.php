@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card shadow-b4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Client Records</h6>
            </div>
            <div class="card-body">


                <form>
                    <input type="hidden" name="editclient_id">
                    <div class="form-group">
                        <label> SANumber </label>
                        <input type="text" name="edit_SANumber" class="form-control" placeholder="Enter SANumber">
                    </div>
                    <div class="form-group">
                        <label>FirstName</label>
                        <input type="text" name="edit_FirstName" class="form-control" placeholder="Enter FirstName">
                    </div>
                    <div class="form-group">
                        <label>LastName</label>
                        <input type="text" name="edit_LastName" class="form-control" placeholder="Enter LastName">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="ClientEmail" name="edit_ClientEmail" class="form-control checking_email"
                            placeholder="Enter Email">
                        <small class="error_email" style="color: red;"></small>
                    </div>

                    <div class="form-group">
                        <label>ContactNumber</label>
                        <input type="text" name="edit_ContactNumber" class="form-control"
                            placeholder="Enter ContactNumber">
                    </div>
                    <div class="form-group">
                        <label>Route</label>
                        <input type="text" name="edit_Route" class="form-control" placeholder="Enter Route">
                    </div>

                    <div class="form-group">
                        <label>Meter Number</label>
                        <input type="text" name="edit_MeterID" class="form-control" placeholder="Enter MeterID">
                    </div>
                    <div class="form-group">
                        <label>FirstMeterReading</label>
                        <input type="text" name="edit_FirstMeterReading" class="form-control"
                            placeholder="Enter FirstMeterReading">
                    </div>

                    <a href="RegClientForm.php" class="btn btn-danger"> CANCEL</a>
                    <button type="submit" name="updateclientbtn" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
@endsection
