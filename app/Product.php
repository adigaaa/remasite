<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'long_description',
        'short_description',
        'brand_id',
        'in_stock',
        'amount',
        'discount',
        'quantity',
        'views',
    ];

    public function images()
    {
        return $this->hasMany(ProductMedia::class,'product_id','id')->where('type','image');
    }

    public function videos()
    {
        return $this->hasMany(ProductMedia::class, 'product_id','id')->where('type','video');
    }

}
