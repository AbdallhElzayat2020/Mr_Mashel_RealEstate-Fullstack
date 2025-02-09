<?php

namespace App\Repositories;

use App\Contracts\Repositories\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function getAll(array $cols = ['*'], array $relations = [], bool $paginate = true)
    {
        $users = User::filter()->select($cols)->orderByDesc('created_at');

        if (count($relations)) {
            $users = $users->with($relations);
        }

        if ($paginate) {
            return $users->paginate();
        }

        return $users->get();
    }

    public function getById(int $id, array $cols = ['*'])
    {
        return User::findOrFail($id, $cols);
    }

    public function create(array $data)
    {
        return User::create($data);
    }

    public function update(User $user, array $data)
    {
        return $user->update($data);
    }

    public function delete(User $user)
    {
        return $user->delete();
    }
}
