<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BoughtTicket;

class BoughtTicketContorller extends Controller
{
    public function insert(Request $request)
    {
        //return $request;
        $selling_price;
        $airlines = $request->airlines;
        if($airlines == "Biman Bangladesh Airlines"){
            $price = $request->price*0.20;
            $selling_price = $request->price + $price;
        }else if($airlines == "US Bangla Airlines"){
            $price = $request->price*0.12;
            $selling_price = $request->price + $price;
        }else if($airlines == "Regent Airways"){
            $price = $request->price*0.10;
            $selling_price = $request->price + $price;
        }
        $insert = BoughtTicket::create([
            'airlines_name'=>$request->airlines,
            'ticket_quantity'=>$request->quantity,
            'ticket_price'=>$request->price,
            'selling_price'=>$selling_price
        ]);

        session()->put('ticket_id', $insert->id);
        return redirect()->back()->with('success','Ticket has Been Purchased!!');
    }
}
