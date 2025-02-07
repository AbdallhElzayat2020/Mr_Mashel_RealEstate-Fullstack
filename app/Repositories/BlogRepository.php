<?php

namespace App\Repositories;

use App\Contracts\Repositories\BlogRepositoryInterface;
use App\Models\Blog;

class BlogRepository implements BlogRepositoryInterface
{
    public function getAll(array $cols = ['*'], array $relations = [], bool $paginate = true)
    {
        $blogs = Blog::filter()->select($cols);

        if (count($relations)) {
            $blogs = $blogs->with($relations);
        }

        if ($paginate) {
            return $blogs->paginate();
        }

        return $blogs->get();
    }

    public function getById(int $id, array $cols = ['*'])
    {
        return Blog::findOrFail($id, $cols);
    }

    public function create(array $data)
    {
        return Blog::create($data);
    }

    public function update(Blog $blog, array $data)
    {
        return $blog->update($data);
    }

    public function delete(Blog $blog)
    {
        return $blog->delete();
    }
}
