<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 */
class Product extends Model
{
    // Products list from Amazon products spreadsheet
    /**
     * @var string[]
     */
    protected $fillable = [
        'asin', 'category_id', 'title', 'price', 'original_price',
        'sale_price', 'cost', 'profit', 'profit_margin', 'rating',
        'review_count', 'sales_rank', 'total_revenue'
    ];

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
