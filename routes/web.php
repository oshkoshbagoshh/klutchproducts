<?php

/*
 * @Author: AJ Javadi
 * @Email: amirjavadi25@gmail.com
 * @Date: 2025-02-05 17:07:29
 * @Last Modified by: AJ Javadi
 * @Last Modified time: 2025-02-05 23:05:51
 * @Description: file:///Users/aj/Herd/klutch_products/routes/web.php
 */

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BucketController;
use App\Http\Controllers\TaskController;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// =========================================
//
//  original home
// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

/* -------------------------------------------------------------------------- */

// Home 2
Route::get('/', function () {
    return Inertia::render(
        'Home',
        [
            [
                'canLogin' => Route::has('login'),
                'canRegister' => Route::has('register'),
            ],
        ]
    );
})->name('Home');
// =========================================
// Public views
Route::get('/sandbox', function () {
    return Inertia::render('Sandbox', [
        'users' => User::all(),

    ]);
})->name('Sandbox');

// About
Route::get('/about', [AboutController::class, 'index'])->name('About Us');

/* -------------------------------------------------------------------------- */
/* Buckets, Tasks
/* -------------------------------------------------------------------------- */
Route::resource('buckets', BucketController::class);
Route::resource('tasks', TaskController::class);

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
