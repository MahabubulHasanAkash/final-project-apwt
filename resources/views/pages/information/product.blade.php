@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-4">

    </div>
</div>

<form action="/analitycs/search" method="post">
    @csrf
    <div class="row">
        <div class="form-group col-3">
            <input type="text" onfocus="(this.type='date')" name="from" class="form-control" placeholder="From date" id="from" value="{{ $from }}">
        </div>
        <div class="form-group col-3">
            <input type="text" onfocus="(this.type='date')" name="to" class="form-control" placeholder="To date" id="to" value="{{ $to }}">
        </div>
        <div class="form-group col-3">
            <select name="status" id="" class="form-control">
                <option value="" {{ $st == "" ? 'selected' : '' }}>--Select Status--</option>
                <option value="1" {{ $st == 1 ? 'selected' : '' }}>Available</option>
                <option value="0" {{ $st == 0 ? 'selected' : '' }}>Out Of Stock</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
        </div>
    </div>
</form>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Product</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($creatives as $creative)
        <tr>
            <td><img src="images/{{$creative->url}}" height=80 width="80" /></td>
            <td>{{ $creative->name }}</td>
            <td>{{ $creative->description }}</td>
            <td>{{ $creative->price }}</td>
            <td>
                @if( $creative->status == 1)
                <label style="color: green;">Available</label>
                @else
                <label style="color: red;">Out Of Stock</label>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection