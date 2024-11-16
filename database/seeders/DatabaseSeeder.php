<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // create our first test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',

        ]);

        // create 10 more users
        User::factory(10)->create();
        // Create categories first
        Category::factory(10)->create()->each(function ($category) {
            // Create 20 products for each category
            Product::factory(20)->create([
                'category_id' => $category->id
            ]);

            // Create 5 best-selling products for each category
            Product::factory(5)->bestSeller()->create([
                'category_id' => $category->id
            ]);

            // Create 5 products on sale for each category
            Product::factory(5)->onSale()->create([
                'category_id' => $category->id
            ]);
        });

//   new
        $this->call([
//            UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
    }

}
