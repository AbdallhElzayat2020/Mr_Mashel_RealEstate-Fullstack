<?php

namespace App\Repositories;

use App\Contracts\Repositories\MailSubscriptionRepositoryInterface;
use App\Models\Blog;
use App\Models\MailSubscription;

class MailSubscriptionRepository implements MailSubscriptionRepositoryInterface
{
    public function getAll(array $cols = ['*'], bool $paginate = true)
    {
        $blogs = Blog::select($cols);

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

    public function delete(MailSubscription $subscription)
    {
        return $subscription->delete();
    }
}
