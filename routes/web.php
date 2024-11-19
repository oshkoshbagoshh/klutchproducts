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

// Public Routes
Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Authentication Routes
require __DIR__.'/auth.php';

// Protected Routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Product Analytics (Admin Only)
    Route::get('/product-analytics', [ProductAnalyticsController::class, 'index'])
        ->name('product.analytics')
        ->middleware('can:view-analytics');
});

// Sandbox Routes (Development Only)
if (app()->environment('local')) {
    Route::prefix('sandbox')->group(function () {
        Route::get('/', [SandboxController::class, 'index'])->name('sandbox');
        Route::get('/money-form', [SandboxController::class, 'moneyForm'])->name('sandbox.money-form');
    });
}
