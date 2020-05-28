<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'email', 'company', 'inquiry', 'quantity', 'product_id',
    ];
}
