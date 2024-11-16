<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmazonProducts extends Model
{
    //
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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
