@extends('layout.app')

@section('content')
<div class="mt-2">
    <div class="card">
        <div class="card-header">
            <label style="font-weight: bold; font-size:22px;">Edit</label>
        </div>
        <div class="card-body">
            <form action="/profile/create" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Upload Profile Image</label>
                        <input autocomplete="off" class="form-control" name="file" placeholder="profile image" type="file">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Enter name</label>
                        <input autocomplete="off" class="form-control" name="name" placeholder="Full name" type="text" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Enter address</label>
                        <input autocomplete="off" class="form-control" name="email" placeholder="Email address" type="text" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Enter phone</label>
                        <input autocomplete="off" class="form-control" name="phone" placeholder="Email phone" type="text" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <input type="submit" class="btn btn-block" value="Save" style="background: #880E4F; color: white; font-weight:bold">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection