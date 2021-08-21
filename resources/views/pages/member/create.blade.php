@extends('layout.app')

@section('content')
<div class="mt-2">
    <div class="card">
        <div class="card-header">
            <label style="font-weight: bold; font-size:22px;">Add New Member</label>
        </div>
        <div class="card-body">
            <form action="/analitycs/registration" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Upload Profile Image</label>
                        <input class="form-control" name="file" type="file">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Enter Full Name</label>
                        <input autocomplete="off" class="form-control" id="FullName" name="name" placeholder="Enter fullname" type="text" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Enter Email Address</label>
                        <input autocomplete="off" class="form-control" id="Email" name="email" placeholder="Enter email" type="text" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Enter Address</label>
                        <input autocomplete="off" class="form-control" id="Email" name="address" placeholder="Enter address" type="text" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Enter Phone</label>
                        <input autocomplete="off" class="form-control" id="Email" name="phone" placeholder="Enter phone" type="text" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Select Role</label>
                        <select class="form-control" name="role">
                            <option value="">--select--</option>
                            @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name}}</option>

                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Enter Password</label>
                        <input autocomplete="off" class="form-control" id="Password" name="password" placeholder="Password" type="password" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Confirm Password</label>
                        <input autocomplete="off" class="form-control" id="ConPassword" name="conpassword" placeholder="Confirm password" type="password" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <input type="submit" class="btn" value="Submit" style="background: #880E4F; color: white; font-weight:bold">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection