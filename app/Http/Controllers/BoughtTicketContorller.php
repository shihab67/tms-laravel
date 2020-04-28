<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BoughtTicket;

class BoughtTicketContorller extends Controller
{
    public function insert(Request $request)
    {
        //return $request;
        $insert = BoughtTicket::create([
            'airlines_name'=>$request->airlines,
            'ticket_quantity'=>$request->quantity,
            'ticket_price'=>$request->price
        ]);

        session()->put('ticket_id', $insert->id);
        return redirect()->back()->with('success','Ticket has Been Purchased!!');
    }
}
