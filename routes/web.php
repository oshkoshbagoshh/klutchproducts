<?php

/*
 * @Author: AJ Javadi
 * @Email: amirjavadi25@gmail.com
 * @Date: 2025-02-05 17:07:29
 * @Last Modified by: AJ Javadi
 * @Last Modified time: 2025-02-06 13:18:14
 * @Description: file:///Users/aj/Herd/klutch_products/routes/web.php
 */

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BucketController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SandboxController;
use App\Http\Controllers\TaskController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// =========================================
//
//  original home
Route::get('/', function () {
    return Inertia::render('zzWelcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

/* -------------------------------------------------------------------------- */

/* -------------------------------------------------------------------------- *
                Home 2, About
- Home Controller, About Us
/* -------------------------------------------------------------------------- */

// Route::get('/', [HomeController::class, 'index'])->name('Home');
// Route::get('/about', [HomeController::class, 'about'])->name('About Us');
/* -------------------------------------------------------------------------- */
/* Sandbox
/* -------------------------------------------------------------------------- */
// Route::get('/sandbox', [SandboxController::class, 'index'])->name('Sandbox');

// Route::get('/about', [AboutController::class, 'index'])->name('About Us');

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
