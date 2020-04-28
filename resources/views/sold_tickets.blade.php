@extends('base')
@section('css')
<style>
    .container{
    padding-top:20px;
}
</style>
@endsection
@section('home')
@include('nav')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class=" shadow-lg p-3 mb-5 bg-blue rounded" style="opacity:0.9;background:white">
                <div class="card-header py-3">
                    <center><h5>Sold Tickets</h5></center>
                </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="myTable">
                    <thead class="thead-light" align="center">
                        <tr>
                        <th scope="col">Airlines Name</th>
                        <th scope="col">Ticket Quantity</th>
                        <th scope="col">Ticket Price</th>
                        <th scope="col">Profit</th>
                        <th scope="col">Buyer Name</th>
                        <th scope="col">Buyer Phone No.</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                            @foreach($data as $res)
                            <tr class="bg-light">
                                <td>{{$res->airlines_name}}</td>
                                <td>{{$res->ticket_quantity}}</td>
                                <td>{{$res->ticket_price}}</td>
                                <td>{{$res->profit}}</td>
                                <td>{{$res->cus_name}}</td>
                                <td>{{$res->cus_phone}}</td>
                            </tr>
                            @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
</script>
@endsection