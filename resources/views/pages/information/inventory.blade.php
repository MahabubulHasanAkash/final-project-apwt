@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-4">

    </div>
</div>


<form action="/analitycs/inventory/search" method="post">
    @csrf
    <div class="row">
        <div class="form-group col-3">
            <input type="text" onfocus="(this.type='date')" name="from" class="form-control" placeholder="From date" id="from" value="{{ $from }}">
        </div>
        <div class="form-group col-3">
            <input type="text" onfocus="(this.type='date')" name="to" class="form-control" placeholder="To date" id="to" value="{{ $to }}">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
        </div>
    </div>
</form>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Cetegory</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($inventory as $inven)
        <tr>
            <td>{{ $inven -> name }}</td>
            <td>{{ $inven -> description }}</td>
            <td>{{ $inven -> category }}</td>
            <td>{{ $inven -> quantity }}</td>
            <td>{{ $inven -> price }}</td>
            <td>{{ $inven -> quantity * $inven -> price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection