<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerDetail;

class CustomerDetailContorller extends Controller
{
    public function list()
    {
        $data = CustomerDetail::all();
        //return $data;
        return view('customer_details')->with('title','Customer Details')->with('data',$data);
    }
}
