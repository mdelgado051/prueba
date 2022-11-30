<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use Illuminate\Http\Request;

class WebController extends Controller
{

    public function home()
    {
        $posts = Blog::all();
        $events = Event::all();

        return view('sections.home', compact('posts', 'events'));
    }

}
