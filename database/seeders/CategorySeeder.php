<?php
// database/seeders/CategorySeeder.php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Create predefined categories
        $categories = [
            'Electronics',
            'Books',
            'Home & Kitchen',
            'Fashion',
            'Sports & Outdoors',
            'Beauty & Personal Care',
            'Toys & Games',
            'Health & Household',
            'Tools & Home Improvement',
            'Pet Supplies'
        ];

        foreach ($categories as $category) {
            Category::factory()->create([
                'name' => $category,
                'slug' => \Str::slug($category),
            ]);
        }

        // Create some random categories
        Category::factory(5)->create();
    }
}
