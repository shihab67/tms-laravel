<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BoughtTicket;
use App\SoldTicket;
use App\CustomerDetail;

class SoldTicketContorller extends Controller
{
    public function insert(Request $request)
    {
        $profit;
        //return $request;
        $this->validate($request,[
            'airlines_name' => 'required',
            'ticket_quantity' => 'required',
            'ticket_price' => 'required|numeric',
            'cus_name' => 'required',
            'cus_phone' => 'required|numeric',
        ],
        ['airlines_name.required' => 'Airlines name is Required!',
         'ticket_quantity.required' => 'Ticket Quantity Required!',
         'ticket_price.required' => 'Ticket price is Required!',
         'ticket_price.numeric' => 'Ticket price has to be number!',
         'cus_name.required' => 'Customer name is required!',
         'cus_phone.required' => 'Customer phone no. is required!',
         'cus_phone.numeric' => 'Customer phone no. is not valid!',
        ]
    );

    $id = session()->get('ticket_id');
    $update = BoughtTicket::find($id);
    $update->ticket_status = 2;
    $update->save();

    $airlines = $request->airlines_name;
    if($airlines == "Biman Bangladesh Airlines"){
       $price =  $request->ticket_price;
       $profit = $price - 2000;
    }else if($airlines == "US Bangla Airlines"){
        $price =  $request->ticket_price;
        $profit = $price - 1500;
     }else if($airlines == "Regent Airways"){
        $price =  $request->ticket_price;
        $profit = $price - 1000;
     }
    
    $insert = SoldTicket::create([
        'airlines_name'=>$request->airlines_name,
        'ticket_quantity'=>$request->ticket_quantity,
        'ticket_price'=>$request->ticket_price,
        'cus_name'=>$request->cus_name,
        'cus_phone'=>$request->cus_phone,
        'profit'=>$profit
    ]);

    $customer = CustomerDetail::create([
        'airlines_name'=>$request->airlines_name,
        'ticket_quantity'=>$request->ticket_quantity,
        'ticket_price'=>$request->ticket_price,
        'cus_name'=>$request->cus_name,
        'cus_phone'=>$request->cus_phone
    ]);

    return redirect()->back()->with('success1', 'Ticket has been sold!');

    }
    public function getTicket()
    {
        $data = BoughtTicket::all()->where('ticket_status', 1);
        if($data == null){
            return "";
        }
        else{
            return $data;
        }
    }
    public function soldTicket()
    {
        $data = SoldTicket::all();
        //return $data;
        return view('sold_tickets')->with('title','Sold Tickets')->with('data',$data);

    }
}
