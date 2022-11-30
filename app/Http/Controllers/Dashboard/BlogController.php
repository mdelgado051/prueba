<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $blogs = Blog::with('user')
            ->orderBy('id', 'desc')
            ->get();

        return view('dashboard.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('dashboard.blog.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:400',
            'intro' => 'required|max:140',
            'content' => 'required',
            'cover' => 'required|image'
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($data['name'], '-');

        $user = auth()->user();

        $blog = $user->blogs()->create($data);

        $blog
            ->addMediaFromRequest('cover')
            ->toMediaCollection('blog-cover');

        return response()->redirectTo(route('blog.index'))
            ->with('alert', [
                'type' => 'success',
                'message' => 'El artículo se ha publicado correctamente'
            ]);
    }

    public function edit(Blog $blog)
    {
        return view('dashboard.blog.form', compact('blog'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|max:400',
            'intro' => 'required|max:140',
            'content' => 'required',
        ]);

        $blog = Blog::find($id);

        $data = $request->all();
        $data['slug'] = Str::slug($data['name'], '-');

        // Check if has a new image
        if ($request->hasFile('cover')) {
            $blog
                ->addMediaFromRequest('cover')
                ->toMediaCollection('blog-cover');
        }

        $blog->update($data);
        return response()->redirectTo(route('blog.index'))
            ->with('alert', [
                'type' => 'success',
                'message' => 'El artículo se ha actualizado correctamente'
            ]);;
    }

    public function delete($id)
    {
        $blog = Blog::destroy($id);

        return response()->redirectTo(route('blog.index'))
            ->with('alert', [
                'type' => 'success',
                'message' => 'El artículo se ha eliminado correctamente'
            ]);
    }

}
