<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackOrder extends Model
{
    protected $fillable = [
        'order_no', 'billing_email',
    ];
}
