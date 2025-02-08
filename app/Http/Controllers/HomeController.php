<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * @return \Inertia\Response
     */
    public function index()
    {
        //        Dummy Data to pass into to the Home View
        $viewData = [
            'title' => 'Welcome to Not Another Blog Site',
            'subtitle' => 'Your go-to place for amazing content',
            'featuredPosts' => [
                ['id' => 1, 'title' => 'Post 1', 'excerpt' => 'This is the first post.'],
                ['id' => 2, 'title' => 'Post 2', 'excerpt' => 'This is the second post.'],
                ['id' => 3, 'title' => 'Post 3', 'excerpt' => 'This is the third post.'],
            ],
            'user' => auth()->user() ? auth()->user()->only(['name', 'email']) : null,
        ];

        return Inertia::render('Home', $viewData);

    }

    // About Us Page

    /**
     * @return \Inertia\Response
     */
    public function about()
    // renders the about us page
    {
        return Inertia::render(
            'AboutUs',
            [
                'title' => 'About Us - Not Another Blog Site',
                'subtitle' => 'Subtitle Here',
                'author' => 'AJ Javadi',
                'description' => str_repeat('word', 150),
                'description_length' => strlen('description'),

            ],
        );
    }

    public function search() {}
}
