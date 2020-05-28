<?php

namespace App;

use App\Order;
use App\Product;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function items()
    {
        return $this->belongsToMany(Product::class, 'order_items', 'order_id', 'product_id')->withPivot('quantity', 'price');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public static function getOrderDetails($order_id)
    {
        $getOrderDetails = Order::where('id', $order_id)->first();
        return $getOrderDetails;
    }
}
