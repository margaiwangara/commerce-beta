<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    
    //relationship with product
    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
