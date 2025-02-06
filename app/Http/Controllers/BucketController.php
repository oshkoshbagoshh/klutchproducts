<?php

namespace App\Http\Controllers;

use App\Models\Bucket;

class BucketController extends Controller
{
    public function index()
    {
        $buckets = Bucket::latest()->paginate();

        return inertia('Categories/Index', compact('categories'));
    }
}
