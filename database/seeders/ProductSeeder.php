<?php
// database/seeders/ProductSeeder.php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Get all categories
        $categories = Category::all();

        // Create regular products
        $categories->each(function ($category) {
            // Create 20-50 regular products per category
            $productsCount = rand(20, 50);
            Product::factory()
                ->count($productsCount)
                ->create(['category_id' => $category->id]);
        });

        // Create best sellers (10% of total products)
        $categories->each(function ($category) {
            // Create 5-10 best sellers per category
            $bestSellersCount = rand(5, 10);
            Product::factory()
                ->bestSeller()
                ->count($bestSellersCount)
                ->create(['category_id' => $category->id]);
        });

        // Create products on sale (20% of total products)
        $categories->each(function ($category) {
            // Create 10-20 products on sale per category
            $onSaleCount = rand(10, 20);
            Product::factory()
                ->onSale()
                ->count($onSaleCount)
                ->create(['category_id' => $category->id]);
        });
    }
}
