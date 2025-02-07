<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class BlogController extends Controller
{
    public function index()
    {
        // Fetch blog posts from the database
        // for now, using dummy data

        $posts = [
            ['id' => 1, 'title' => 'First Post', 'content' => 'This is the first post.'],
            ['id' => 2, 'title' => 'Second Post', 'content' => 'This is the second post.'],
            ['id' => 3, 'title' => 'Third Post', 'content' => 'This is the third post.'],
        ];

        print_r($posts);

        return Inertia::render('Blog', compact('posts'));
    }
}
