<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //$productImage->product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    //Campo claculado para crear la ruta a un Image
    public function getUrlAttribute()
    {
        if (substr($this->image, 0, 4) === "http") {
            return $this->image;
        }

        return '/images/products/' . $this->image;
    }
}
