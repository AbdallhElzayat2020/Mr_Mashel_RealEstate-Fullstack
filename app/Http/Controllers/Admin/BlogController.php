<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Repositories\BlogRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StoreBlogRequest;
use App\Http\Requests\Blog\UpdateBlogRequest;
use App\Models\Blog;

class BlogController extends Controller
{
    public function __construct(private BlogRepositoryInterface $blogRepository)
    {
        $this->middleware('can:create-blogs')->only(['create', 'store']);
        $this->middleware('can:view-blogs')->only(['index', 'show']);
        $this->middleware('can:update-blogs')->only(['edit', 'update']);
        $this->middleware('can:delete-blogs')->only(['destroy']);
    }

    public function index()
    {
        $blogs = $this->blogRepository->getAll(relations: [
            'author:id,name',
        ]);

        return view('dashboard.pages.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('dashboard.pages.blog.create');
    }

    public function store(StoreBlogRequest $request)
    {
        $this->blogRepository->create($request->validated());

        return to_route('admin.blogs.index');
    }

    public function show(Blog $blog)
    {
        return view('dashboard.pages.blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('dashboard.pages.blog.edit', compact('blog'));
    }

    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $this->blogRepository->update($blog, $request->validated());

        return to_route('admin.blogs.index');
    }

    public function destroy(Blog $blog)
    {
        $this->blogRepository->delete($blog);

        return to_route('admin.blogs.index');
    }
}
