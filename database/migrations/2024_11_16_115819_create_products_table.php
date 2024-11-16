<?php
// database/migrations/2024_01_01_000002_create_products_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('asin')->unique();
            $table->string('title');
            $table->string('brand');
            $table->decimal('price', 10, 2);
            $table->decimal('sale_price', 10, 2);
            $table->decimal('original_price', 10, 2);
            $table->decimal('cost', 10, 2);
            $table->decimal('profit', 10, 2);
            $table->decimal('profit_margin', 5, 2);
            $table->decimal('rating', 2, 1)->nullable();
            $table->integer('review_count')->default(0);
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->decimal('total_revenue', 12, 2)->default(0);
            $table->integer('sales_rank')->nullable();
            $table->boolean('fba')->default(false);
            $table->string('url');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
