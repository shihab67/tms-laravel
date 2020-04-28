<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    protected $fillable = [
        'airlines_name', 'ticket_quantity', 'ticket_price', 'cus_name', 'cus_phone',
    ];
}
