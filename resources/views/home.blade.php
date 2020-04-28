@extends('base')
@section('css')
<style>
   .container{
       padding-top: 20px;
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
</style>
@endsection
@section('home')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Buy Tickets
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Airlines Name</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Biman Bangladesh Airlines</option>
                      <option>US Bangla Airlines</option>
                      <option>Regent Airways</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="quantity" value="1" disabled>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="price" disabled>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Sell Tickets
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 button">
            <center>
                <button type="submit" name="submit" class="btn btn-success btn-lg">Buy/Sell</button>
            </center>
        </div>
    </div>
</div>

@endsection