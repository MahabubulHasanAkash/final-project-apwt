@extends('layout.app')

@section('content')

<div class="mt-5">

    <div class="card">
        <div class="card-header">
            <label>Submit your issue </label>
        </div>
        <div class="card-body">

            <form action="/contact/create" method="post">
                @csrf
                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Enter Issue Title</label>
                        <input autocomplete="off" class="form-control" name="issue" placeholder="Issue Title" type="text">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Enter Issue Details</label>
                        <textarea autocomplete="off" class="form-control" rows="5" name="details" placeholder="Details" type="text" value=""></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary" value="Send">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection