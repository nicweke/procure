<?php

namespace App;

use App\Product;
use App\Shop;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['name', 'description', 'specialization', 'cover_img', 'ownername', 'email', 'tel', 'license', 'cert', 'account_name', 'account_number', 'bank_name', 'branch_name'];
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'shop_id');
    }
}
