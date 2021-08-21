@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-4">

    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <form action="/analitycs/sales/search" method="post">
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
    </div>
    <div class="col-md-4">
        <a class="btn btn-primary" id="export" style="float: right;" href="{{ URL::to('/analitycs/sales/pdf', ['from'=> $from, 'to'=>$to ]) }}">Export to PDF</a>
    </div>
</div>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sales as $sale)
        <tr>
            <td>{{ $sale -> name }}</td>
            <td>{{ $sale -> unit }}</td>
            <td>{{ $sale -> unit_price }}</td>
            <td>{{ $sale->unit * $sale->unit_price }}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">Total</td>
            <td>{{ $total}}</td>
        </tr>
    </tfoot>
</table>


@endsection

@section('scripts')

<script>
    (function() {
        $("#export").on('click', function() {
            var from = $("#from").val();
            var to = $("#to").val();

            var data = {
                "_token": "{{ csrf_token() }}",
                "from": from,
                "to": to
            };
            $.ajax({
                type: "POST",
                url: "/sales/pdf",
                data: JSON.stringify(data),
                contentType: "applycation/json",
                success: function(rData) {

                }
            });
        });
    })();
</script>

@endsection