<?php

namespace App;

use App\Shop;
use App\User;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable=['name','description','specialization','cover_img'];
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'shop_id');
    }
}
