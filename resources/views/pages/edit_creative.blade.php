@extends('layout.app')

@section('content')
<div class="mt-2">
    <div class="card">
        <div class="card-header">
            <label style="font-weight: bold; font-size:22px;">Edit</label>
        </div>
        <div class="card-body">
            <form action="/update" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $creative-> id}}">
                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Enter Creative</label>
                        <input autocomplete="off" class="form-control" id="FullName" name="creative" placeholder="" type="file">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Enter Name</label>
                        <input autocomplete="off" class="form-control" id="Email" name="name" placeholder="Enter Name" type="text" value="{{ $creative-> name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Enter Description</label>
                        <input autocomplete="off" class="form-control" id="Password" name="description" placeholder="Enter Description" type="text" value="{{ $creative-> description}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Enter Price</label>
                        <input autocomplete="off" class="form-control" name="price" placeholder="Enter Price" type="text" value="{{ $creative -> price }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="">--Select Status--</option>
                            <option value="1" {{ $creative->status == true ? 'selected' : '' }}>Available</option>
                            <option value="0" {{ $creative->status == false ? 'selected' : '' }}>Out Of Stock</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary" value="Update">
                        <a href="/creative-list" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection