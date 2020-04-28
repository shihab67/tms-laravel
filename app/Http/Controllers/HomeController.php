<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BoughtTicket;

class HomeController extends Controller
{
    public function index()
    {
        $data = BoughtTicket::all()->where('ticket_status', 1);
        //return $data;
        return view('home')->with('title','Home')->with('data',$data);
    }
}
