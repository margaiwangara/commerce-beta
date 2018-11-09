<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsAndAttributes extends Model
{
    protected $table = 'products_attributes';

    public function product(){
        return $this->belongsTo(Products::class);
    }
}
