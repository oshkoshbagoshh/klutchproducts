<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Products list from Amazon products spreadsheet
    protected $fillable = [
        'asin', 'category_id', 'title', 'price', 'original_price',
        'sale_price', 'cost', 'profit', 'profit_margin', 'rating',
        'review_count', 'sales_rank', 'total_revenue'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
