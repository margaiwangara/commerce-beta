<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductReviews extends Model
{
    public function product(){
        return $this->belongsTo(Products::class, 'prod_id');
    }
}
