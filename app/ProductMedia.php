<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductMedia extends Model
{
    protected $fillable = [
        'type',
        'path',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
