<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected function getPriceAttribute($value)
    {
        return $value / 100;
    }

    protected function setPriceAttribute($value)
    {
        $this->attributes['price'] = $value * 100;
    }
}
