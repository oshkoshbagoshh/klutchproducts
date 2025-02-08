<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class AboutController extends Controller
{
    // Display the "About Us" Component
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'About Us';
        $viewData['subtitle'] = 'This is the about us page';
        $viewData['description'] = 'This is the description.This is the description.This is the description.This is the description.';
        $viewData['author'] = 'Scrooge Mcduck';

        return Inertia::render('AboutUs')->with($viewData);
    }
}
