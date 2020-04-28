@extends('base')
@section('css')
<style>
   .container{
       padding-top: 20px;
   }
   .card-body{
       padding-top: 10px;
   }
   .card{
       border: none;
   }
   .card-header{
       text-align: center;
       background: teal;
       color: #fff;
       padding-bottom: 10px; 
   }
   .button{
       padding-top: 30px;
   }
   h4{
       color: red;
   }
</style>
@endsection
@section('home')
@include('nav')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Buy Tickets
                </div>
                <form action="{{route('ticket.buy')}}" method="POST" id="form1">
                    @csrf
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Airlines Name:</label>
                        <select class="form-control" id="dropdown1" name="airlines" onchange="chkind()">
                          <option value="0">Select An Airlines</option>
                          <option>Biman Bangladesh Airlines</option>
                          <option>US Bangla Airlines</option>
                          <option>Regent Airways</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Ticket Quantity:</label>
                        <input type="text" class="form-control" name="quantity" value="1" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Ticket Price(Tk.):</label>
                        <input type="text" class="form-control" id="price" name="price" readonly>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Sell Tickets
                </div>
                <form action="{{route('ticket.sell')}}" method="POST" id="form2">
                    @csrf
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times</button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li style="color:red;">{{$error}}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif       
                    @if(session()->has('success1'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times</button>
                            <ul>
                                <li style="color:green">{{ session()->get('success1') }}</li>
                            </ul>
                        </div>
                    @endif
                    <h4 class="result"></h4>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Airlines Name:</label>
                        <input type="text" class="form-control" id="airlines_name" name="airlines_name" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Ticket Quantity:</label>
                        <input type="text" class="form-control" name="ticket_quantity" id="ticket_quantity" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Ticket Price(Tk.):</label>
                        <input type="text" class="form-control" id="ticket_price" value="{{old('ticket_price')}}" name="ticket_price" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Customer Name:</label>
                        <input type="text" class="form-control" id="cus_name" name="cus_name" value="{{old('cus_name')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Customer Phone:</label>
                        <input type="text" class="form-control" id="cus_phone" name="cus_phone" value="{{old('cus_phone')}}">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 button">
            <center>
                <button type="submit" name="submit" class="btn btn-success btn-lg" onclick="submit()">Buy/Sell</button>
            </center>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
            $.ajax({
            type:'GET',
            url:'/checkticket',
            success:function(response)
            {
                if(response == ""){
                    $(".result").html("Buy A Ticket First!!!");
                }else{
                    $.each(response, function(index, el) { 
                    $("#airlines_name").val(el['airlines_name']);
                    $("#ticket_quantity").val(el['ticket_quantity']);
                    $("#ticket_price").val(el['selling_price']);
                });
                }
            }

            });
    });

    function chkind(){
        var dropdown1 = document.getElementById('dropdown1');
        //console.log(dropdown1.selectedIndex);
        var textbox = document.getElementById('price');
        if(dropdown1.selectedIndex == 0){
            textbox.value = "No Airlines Selected";
        } else if(dropdown1.selectedIndex == 1) {
            textbox.value = "2000";
        } else if(dropdown1.selectedIndex == 2) {
            textbox.value = "1500";
        } else if(dropdown1.selectedIndex == 3) {
            textbox.value = "1000";
        }
   }
   function submit(){
        var dropdown = document.getElementById('dropdown1');
        //console.log(dropdown.selectedIndex.value);
        if(dropdown.selectedIndex == 0){
            document.getElementById("form2").submit();
        }
        else{
            document.getElementById("form1").submit();
        }
   }
</script>
@endsection