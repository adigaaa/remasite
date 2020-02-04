<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    protected $fillable  = [
        'name',
        'logo',
        'type_id'
    ];
    public function type()
    {
        return $this->belongsTo(Type::class,'type_id','id')
    }
}
