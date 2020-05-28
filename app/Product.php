<?php

namespace App;

use App\ProductReview;
use App\Shop;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function shop()
    {
        return $this->belongsTo('App\Shop', 'shop_id');
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

}
