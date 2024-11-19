<?php

use App\Http\Controllers\ProductAnalyticsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// =============
// #BOOKMARK
// Main Home
//TODO: Change to Home view

Route::get('/', function () {
    return Inertia::render('ProductReview');
});


// SANDBOX
Route::get('/MoneyForm', function () {
    return Inertia::render('MoneyForm');
});

Route::get('/sandbox', function () {
    return Inertia::render('Sandbox');
});

// /****
// * Breeze Auths
// *
// ***/


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// KLUTCH PRODUCTS PRODUCT REVIEW SITE


// Route group: (with prefix "products" (/reviews )
// REPORTS:
//Route::prefix('reports',)
//================== VERSION 1 ================
//Route::get('/products', function () {
//    return Inertia::render('ProductReview');
//});

// ProductSeeder Analytics Views
// TODO: refactor to be under admin dashboard or for registered users. (use routegroup)

Route::get(
    '/product-analytics',
    [ProductAnalyticsController::class, 'index']
)
    ->name('product.analytics');


// #FIN
// ===========================================
require __DIR__ . '/auth.php';