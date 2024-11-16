<?php
// database/factories/ProductFactory.php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $originalPrice = $this->faker->randomFloat(2, 10, 1000);
        $salePrice = $this->faker->boolean(30)
            ? $originalPrice * (1 - $this->faker->randomFloat(2, 0.1, 0.5))
            : $originalPrice;
        $cost = $originalPrice * 0.6;
        $profit = $salePrice - $cost;
        $profitMargin = ($profit / $salePrice) * 100;
        // generate more unieue ASIN
        $asin = 'B' . strtoupper(Str::random(9));

        return [
            'asin' => $asin,
            'title' => $this->faker->sentence(6),
            'brand' => $this->faker->company(), // Make sure brand is included
            'price' => $salePrice,
            'sale_price' => $salePrice,
            'original_price' => $originalPrice,
            'cost' => $cost,
            'profit' => $profit,
            'profit_margin' => $profitMargin,
            'rating' => $this->faker->randomFloat(1, 1, 5),
            'review_count' => $this->faker->numberBetween(0, 5000),
            'category_id' => Category::factory(),
            'total_revenue' => $this->faker->randomFloat(2, 1000, 100000),
            'sales_rank' => $this->faker->numberBetween(1, 10000),
            'fba' => $this->faker->boolean(70),
            'url' => $this->faker->url(),
            'description' => $this->faker->paragraph()
        ];
    }

    public function bestSeller(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'rating' => $this->faker->randomFloat(1, 4, 5),
                'review_count' => $this->faker->numberBetween(1000, 5000),
                'sales_rank' => $this->faker->numberBetween(1, 100),
                'total_revenue' => $this->faker->randomFloat(2, 50000, 200000),
            ];
        });
    }

    public function onSale(): Factory
    {
        return $this->state(function (array $attributes) {
            $originalPrice = $attributes['original_price'];
            $salePrice = $originalPrice * (1 - $this->faker->randomFloat(2, 0.2, 0.6));
            $cost = $attributes['cost'];
            $profit = $salePrice - $cost;
            $profitMargin = ($profit / $salePrice) * 100;

            return [
                'price' => $salePrice,
                'sale_price' => $salePrice,
                'profit' => $profit,
                'profit_margin' => $profitMargin,
            ];
        });
    }
}
