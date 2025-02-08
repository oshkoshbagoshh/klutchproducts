<?php

namespace App\Http\Controllers;

use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return TagResource::collection(Tag::all());
    }

    public function store(Request $request, Tag $tag)
    {
        $data = $request->validate([
            'name' => ['required'],
            'slug' => ['required'],
            'blogpost_id' => ['required', 'exists:blogposts'],
        ]);

        return new TagResource(Tag::create($data));
    }

    public function show(Tag $tag)
    {
        return new TagResource($tag);
    }

    public function update(Request $request, Tag $tag)
    {
        $data = $request->validate([
            'name' => ['required'],
            'slug' => ['required'],
            'blogpost_id' => ['required', 'exists:blogposts'],
        ]);

        $tag->update($data);

        return new TagResource($tag);
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return response()->json();
    }
}
