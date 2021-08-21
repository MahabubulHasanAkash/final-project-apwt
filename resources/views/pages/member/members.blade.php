@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-4">

    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <label style="font-size: 22px; font-weight: bold">Member List</label>
            <a href="/analitycs/members/create" class="btn btn-primary">Add New</a>
        </div>
    </div>
    <div class="card-body">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td><img src="{{ asset('images').'/'. $user->image }}" height=80 width="80" /></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->roles->name }}</td>
                    <td><a href="/analitycs/members/edit/{{ $user -> id}}" class="btn btn-primary">Edit</a></td>
                    <td> <a href="/analitycs/members/delete/{{ $user -> id}}" class="btn btn-danger">Delete</a> </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection