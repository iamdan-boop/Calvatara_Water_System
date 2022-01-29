@extends('layouts.app')

@section('content')
    <form method="POST">
        <input type="hidden" name="edit_id">
        <div class="form-group">
            <label> Username </label>
            <input type="text" name="edit_username" class="form-control" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="edit_email" class="form-control checking_email" placeholder="Enter Email">
            <small class="error_email" style="color: red;"></small>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="edit_password" class="form-control" placeholder="Enter Password">
        </div>
        <div class="form-group">
            <label>Usertype</label>
            <select name="update_usertype" class="form-control">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <a href="RegAdminForm.php" class="btn btn-danger"> CANCEL</a>
        <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
    </form>
@endsection
