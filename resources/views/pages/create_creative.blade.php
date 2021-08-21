@extends('layout.app')

@section('content')

<div class="mt-2">
    <div class="card">
        <div class="card-header">
            <label style="font-weight: bold; font-size:22px;">Create</label>
        </div>
        <div class="card-body">
            <form action="create-creative" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Enter Creative</label>
                        <input autocomplete="off" class="form-control" id="FullName" name="creative" placeholder="" type="file">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Enter Name</label>
                        <input autocomplete="off" class="form-control" id="Email" name="name" placeholder="Enter Name" type="text" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Enter Description</label>
                        <textarea autocomplete="off" class="form-control" rows="5" name="description" placeholder="Enter Description" type="text" value=""></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Enter Price</label>
                        <input autocomplete="off" class="form-control" id="ConPassword" name="price" placeholder="Enter Price" type="text" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="">--Select Status--</option>
                            <option value="1">Available</option>
                            <option value="0">Out Of Stock</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="creative-list" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection