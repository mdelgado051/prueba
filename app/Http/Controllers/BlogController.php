<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $posts = Blog::all();
        $events = Event::all();

        return view('sections.blog', compact('posts', 'events'));
    }

    public function show(Blog $blog)
    {
        return view('blogs-events.base-blog', compact('blog'));
    }

}
