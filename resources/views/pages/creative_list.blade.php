@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-4">

    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <label style="font-size: 22px; font-weight: bold">Product List</label>
            <a href="/create-creative" class="btn btn-primary">Add New</a>
        </div>
    </div>
    <div class="card-body">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Creative</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($creatives as $creative)
                <tr>
                    <td><img src="{{ asset('images').'/'.session('user')->image }}" height=80 width="80" /></td>
                    <td>{{ $creative->name }}</td>
                    <td>{{ $creative->description }}</td>
                    <td>{{ $creative->price }}</td>
                    <td>{{ $creative->status == 1? "Available" : "Out Of Stock" }}</td>
                    <td><a href="update-create/{{ $creative -> id}}" class="btn btn-primary">Edit</a></td>
                    <td> <a href="delete-create/{{ $creative -> id}}" class="btn btn-danger">Delete</a> </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection