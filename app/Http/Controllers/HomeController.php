<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        // Pass data directly into the render method's second argument
        return Inertia::render('Home', [
            'title' => 'Home Page - Klutch Products',
            'viewData' => [
                'subtitle' => 'Your trusted source for unbiased product reviews.',
            ],
        ]);
    }

    public function about()
    {
        // Pass multiple properties in an array
        return Inertia::render('AboutUs', [
            'title' => 'About Us - Klutch Products',
            'subtitle' => 'About Us',
            'description' => 'This is the about us page...',
            'author' => 'AJ Javadi',
        ]);
    }
}
