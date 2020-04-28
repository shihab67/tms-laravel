@extends('base')
@section('css')
<style>
    .container{
        justify-content: center !important;
        padding-top: 50px;
    }
    .card-header{
        text-align: center;
        background: teal;
        color: white;
        text-transform: uppercase;
    }
    .card-body{
        text-align: center;
    }
</style>
@endsection
@section('home')
@include('nav')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Total Tickets Purchased
                </div>
                <div class="card-body">
                    <h1>{{ $bought == null ? '0' : $bought}}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Total Tickets Sold
                </div>
                <div class="card-body">
                    <h1>{{ $sold == null ? '0' : $sold}}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Total Profit
                </div>
                <div class="card-body">
                    <h1>{{ $profit == null ? '0' : $profit}} Tk.</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection