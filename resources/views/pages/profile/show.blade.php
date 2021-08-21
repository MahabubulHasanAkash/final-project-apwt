@extends('layout.app')

@section('content')


<div class="mt-2">
    <div class="card">
        <div class="card-header">
            <h3>Profile</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Profile Image</td>
                        <td><img src="{{ asset('images').'/'.$profile->image }}" height="100" width="100" alt=""></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>{{ $profile->name }}</td>
                    </tr>
                    <tr>
                        <td>Profile Image</td>
                        <td>{{ $profile->email }}</td>
                    </tr>
                    <tr>
                        <td>Profile Image</td>
                        <td>{{ $profile->address }}</td>
                    </tr>
                    <tr>
                        <td>Profile Image</td>
                        <td>{{ $profile->phone }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- <div class="card-footer">
            <a href="/profile/edit" class="btn btn-primary">Edit</a>
        </div> -->
    </div>
</div>

@endsection