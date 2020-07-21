<?php

namespace App;

use App\ProductReview;
use App\Shop;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
    use SearchableTrait;
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'products.name' => 10,
            'products.details' => 7,
            'products.description' => 5,

        ],
    ];

    public function shop()
    {
        return $this->belongsTo('App\Shop', 'shop_id');
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

}
