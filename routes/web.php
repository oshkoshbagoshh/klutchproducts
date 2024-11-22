<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductAnalyticsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SandboxController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Public Routes - No middleware needed for basic pages
Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Add unauthorized route
Route::get('/unauthorized', function () {
    return Inertia::render('Unauthorized');
})->name('unauthorized');

// Authentication Routes
require __DIR__.'/auth.php';

// Protected Routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Regular user routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin only routes
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/product-analytics', [ProductAnalyticsController::class, 'index'])
            ->name('product.analytics');
});
});

// Sandbox Routes (Development Only)
if (app()->environment('local')) {
    Route::prefix('sandbox')->group(function () {
        Route::get('/', [SandboxController::class, 'index'])->name('sandbox');
        Route::get('/money-form', [SandboxController::class, 'moneyForm'])->name('sandbox.money-form');
    });
}
