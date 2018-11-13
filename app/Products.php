<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function presentPrice()
    {
        return '$' .number_format($this->price, 2);
    }

    public function images(){
        return $this->hasMany(ProductImages::class, 'prod_id');
    }

    public function getfirstImageAttribute(){
        return $this->hasMany(ProductImages::class, 'prod_id')->first();
    }

    public function attributes(){
        return $this->hasMany(ProductsAndAttributes::class, 'prod_id');
    }

    public function reviews(){
        return $this->hasMany(ProductReviews::class, 'prod_id');
    }

    
}
