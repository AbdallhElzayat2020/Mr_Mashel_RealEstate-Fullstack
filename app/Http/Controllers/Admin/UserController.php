<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Repositories\UserRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(
        private UserRepositoryInterface $userRepository
    )
    {
    }

    public function index()
    {
        $users = $this->userRepository->getAll();

        return view('dashboard.pages.users.index', compact('users'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(User $user)
    {
    }

    public function edit(User $user)
    {
    }

    public function update(Request $request, User $user)
    {
    }

    public function destroy(User $user)
    {
    }
}
