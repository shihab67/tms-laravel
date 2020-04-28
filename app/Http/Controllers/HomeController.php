<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BoughtTicket;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $data = BoughtTicket::all()->where('ticket_status', 1);
        //return $data;
        return view('home')->with('title','Home')->with('data',$data);
    }
    public function stats()
    {
        $bought = DB::table('bought_tickets')
                ->where('ticket_status', '=', '2')
                ->get();

        $sold = DB::table('sold_tickets')
                ->get();

        $profit = DB::table('sold_tickets')
                    ->sum('profit');
        //return count($sold);
        return view('stats')->with('title','Statistics')->with('bought',count($bought))->with('sold',count($sold))->with('profit',$profit);
    }
}
