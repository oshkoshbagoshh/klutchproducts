<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class SandboxController extends Controller
{
    public function index()
    {
        return Inertia::render('Sandbox');
    }
}
