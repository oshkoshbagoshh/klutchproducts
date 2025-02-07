<?php

/*
 * @Author: AJ Javadi
 * @Email: amirjavadi25@gmail.com
 * @Date: 2025-02-05 17:07:29
 * @Last Modified by: AJ Javadi
 * @Last Modified time: 2025-02-07 08:56:13
 * @Description: file:///Users/aj/Herd/klutch_products/routes/web.php
 */

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|--------------------------------------------------------------------------
*/

// Public Route: Blog Page
Route::get('/', [BlogController::class, 'index'])->name('blog');

// Auth Routes (Jetstream)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Admin Dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
});

// ==================================
// Sanctum Auth Middleware
// ==================================
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
