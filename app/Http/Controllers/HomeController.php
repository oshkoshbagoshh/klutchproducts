<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    private function getFallbackData(): array
    {
        try {

            // read the seed_data.json file from storage
            $seedData = \Storage::disk('local')->get('seed_data.json');

            return json_decode($seedData, true);

        } catch (\Exception $e) {
            // log the error and return an emty array as last resport
            logger()->error('Error fetching fallback data: '.$e->getMessage());

            return [
                'trendingTags' => [],
                'latestPosts' => [],
            ];
        }

    }

    /**
     * Render the Home view.
     *
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
        // Initialize default view data
        $viewData = [
            'title' => 'Not Another Blog Site',
            'subtitle' => 'Your go-to place for amazing content',
            'trendingTags' => [],
            'latestPosts' => [],
            'user' => auth()->user() ? auth()->user()->only(['name', 'email']) : null,
            'warning' => null, // Add a warning field for error messages
        ];

        try {
            // Fetch trending categories (tags) based on post count
            $trendingTags = Tag::withCount('blogposts')
                ->orderBy('blogposts_count', 'desc')
                ->limit(5)
                ->get();

            // Fetch latest posts for the carousel
            $latestPosts = Post::with(['tags', 'user'])
                ->latest()
                ->limit(5)
                ->get();

            // Update view data with fetched data
            $viewData['trendingTags'] = $trendingTags;
            $viewData['latestPosts'] = $latestPosts;

        } catch (Exception $e) {
            // Log the error and fetch fallback data
            logger()->error('Error fetching data for HomeController: '.$e->getMessage());
            $viewData['warning'] = 'We encountered an issue fetching data. Displaying dummy content instead.';
            $fallbackData = $this->getFallbackData();
            $viewData['trendingTags'] = $fallbackData['trendingTags'];
            $viewData['latestPosts'] = $fallbackData['latestPosts'];
        }

        // Pass data to the Home view
        return Inertia::render('Home', $viewData);
    }

    /**
     * Handle search for tags and article content.
     *
     * @return JsonResponse
     */
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search posts by title or content
        $posts = Post::where('title', 'like', "%$query%")
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
