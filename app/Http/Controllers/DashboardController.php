<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        // Add admin dashboard data
        $stats = [
            'total_users' => User::count(),
            'total_products' => Product::count(),
            'total_revenue' => Product::sum('total_revenue'),
            'average_rating' => Product::avg('rating'),
        ];
        return Inertia::render('Dashboard', [
            'stats' => $stats
        ]);
    }
}
