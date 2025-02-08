<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Tag;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Render the Home view.
     *
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
        // Fetch trending categories (tags) based on post count
        $trendingTags = Tag::withCount('blogposts')
            ->orderBy('posts_count', 'desc')
            ->limit(5)
            ->get();

        // Fetch latest posts for the carousel
        $latestPosts = BlogPost::with(['tags', 'user'])
            ->latest()
            ->limit(5)
            ->get();

        // Pass data to the Home view
        $viewData = [
            'title' => 'Welcome to Not Another zzBlog Site',
            'subtitle' => 'Your go-to place for amazing content',
            'trendingTags' => $trendingTags,
            'latestPosts' => $latestPosts,
            'user' => auth()->user() ? auth()->user()->only(['name', 'email']) : null,
        ];

        return Inertia::render('Home', $viewData);
    }

    /**
     * Handle search for tags and article content.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search posts by title or content
        $posts = BlogPost::where('title', 'like', "%$query%")
            ->orWhere('content', 'like', "%$query%")
            ->with(['tags', 'user'])
            ->get();

        // Search tags by name
        $tags = Tag::where('name', 'like', "%$query%")
            ->get();

        return response()->json([
            'blogposts' => $posts,
            'tags' => $tags,
        ]);
    }
}
