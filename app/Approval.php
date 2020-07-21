<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    protected $fillable = ['fname', 'lname', 'cname', 'address', 'postal', 'city'];
}
