<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoughtTicket extends Model
{
    protected $fillable = [
        'airlines_name', 'ticket_quantity', 'ticket_price', 'ticket_status'
    ];
}
