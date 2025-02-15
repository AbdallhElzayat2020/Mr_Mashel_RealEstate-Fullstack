<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::active()->latest()->get();

        return view('website.pages.Blog', compact('blogs'));
    }

    public function show(string $blogId)
    {
        $blog = Blog::active()->firstWhere(['id' => $blogId]);

        if (! $blog) {
            abort(404);
        }

        $blog->loadMissing(['media', 'author']);

        return view('website.pages.Blog-details', compact('blog'));
    }
}
