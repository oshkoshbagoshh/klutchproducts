<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class AdminController extends Controller
{
    public function index()
    {
        // Fetch domain specific data
        $stats = [
            'totalUsers' => '100',
            'totalPosts' => '50',
        ];

        return Inertia::render('Admin/Dashboard.vue', compact('stats'));
    }
}
