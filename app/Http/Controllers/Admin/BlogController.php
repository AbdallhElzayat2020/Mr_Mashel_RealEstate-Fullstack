<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Repositories\BlogRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogRequest;
use App\Models\Blog;

class BlogController extends Controller
{
    public function __construct(
        private BlogRepositoryInterface $blogRepository,
    ) {}

    public function index()
    {
        $blogs = $this->blogRepository->getAll();

        return view('admin.blog.index', compact('blogs'));
    }

    public function create(BlogRequest $request)
    {
        return view('admin.blog.create');
    }

    public function store(BlogRequest $request)
    {
        $this->blogRepository->create($request->validated());

        return to_route('admin.blogs.index');
    }

    public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(BlogRequest $request, Blog $blog)
    {
        $this->blogRepository->update($blog->id, $request->validated());

        return to_route('admin.blogs.index');
    }

    public function destroy(Blog $blog)
    {
        $this->blogRepository->delete($blog->id);

        return to_route('admin.blogs.index');
    }
}
