@extends('layout.app')

@section('content')

<div class="row mt-3">
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="card card-default" style="background-color: red; color: white">
            <div class="card-body center">
                <div style="width: 100%; text-align:center">2000</div>
                <div style="width: 100%; text-align:center">VISITS</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="card card-default" style="background-color: green; color:aliceblue">
            <div class="card-body center">
                <div style="width: 100%; text-align:center">46.44%</div>
                <div style="width: 100%; text-align:center">BOUNCE RATE</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="card card-default" style="background-color: blue;color:aliceblue">
            <div class="card-body center">
                <div style="width: 100%; text-align:center">25009</div>
                <div style="width: 100%; text-align:center">PAGEVIEWS</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="card card-default" style="background-color: #E5611B;color:aliceblue">
            <div class="card-body center">
                <div style="width: 100%; text-align:center">46.9%</div>
                <div style="width: 100%; text-align:center">GROWTH RATE</div>
            </div>
        </div>
    </div>
</div>

@endsection