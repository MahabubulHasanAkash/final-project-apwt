@extends('layout.app')

@section('content')
<div class="mt-2">
    <div class="card">
        <div class="card-header">
            <label style="font-weight: bold; font-size:22px;">Update Member Info</label>
        </div>
        <div class="card-body">
            <form action="/members/update" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Upload Profile Image</label>
                        <input class="form-control" name="file" type="file">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Enter Full Name</label>
                        <input autocomplete="off" class="form-control" id="FullName" name="name" placeholder="Enter fullname" type="text" value="{{ $user->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Enter Email Address</label>
                        <input autocomplete="off" class="form-control" id="Email" name="email" placeholder="Enter email" type="text" value="{{ $user->email}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Enter Address</label>
                        <input autocomplete="off" class="form-control" id="Email" name="address" placeholder="Enter address" type="text" value="{{ $user->address}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Enter Phone</label>
                        <input autocomplete="off" class="form-control" id="Email" name="phone" placeholder="Enter phone" type="text" value="{{ $user->phone}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Select Role</label>
                        <select class="form-control" name="role">
                            <option value="">--select--</option>
                            @foreach($roles as $role)
                            <option value="{{ $role->id }}" {{ $user->roles_id == $role->id ? 'selected' : '' }}>{{ $role->name}}</option>

                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <input type="submit" class="btn" value="Update" style="background: #880E4F; color: white; font-weight:bold">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection