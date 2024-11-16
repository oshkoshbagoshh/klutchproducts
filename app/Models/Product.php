<?php
// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'asin',
        'title',
        'brand',
        'price',
        'sale_price',
        'original_price',
        'cost',
        'profit',
        'profit_margin',
        'rating',
        'review_count',
        'category_id',
        'total_revenue',
        'sales_rank',
        'fba',
        'url',
        'description'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'original_price' => 'decimal:2',
        'cost' => 'decimal:2',
        'profit' => 'decimal:2',
        'profit_margin' => 'decimal:2',
        'rating' => 'decimal:1',
        'fba' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
