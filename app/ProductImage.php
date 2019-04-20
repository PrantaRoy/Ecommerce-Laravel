<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    public function productimages(){

        return $this->belongsTo('App\Product');
    }
}
