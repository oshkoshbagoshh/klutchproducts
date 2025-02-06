<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class AboutController extends Controller
{
    // Display the "About Us" Component
    public function index()
    {
        return Inertia::render('AboutUs');
    }
}
