<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Repositories\UserRepositoryInterface;
use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(
        private UserRepositoryInterface $userRepository
    ) {}

    public function index()
    {
        $users = $this->userRepository->getAll();

        return view('dashboard.pages.users.index', compact('users'));
    }

    public function create()
    {

        return view('dashboard.pages.users.create');
    }

    public function store(StoreUserRequest $request)
    {
        $this->userRepository->create($request->validated());

        return to_route('admin.users.index');
    }

    public function show(User $user) {}

    public function edit(User $user)
    {
        return view('dashboard.pages.users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $this->userRepository->update($user, $request->validated());

        return to_route('admin.users.index');
    }

    public function destroy(User $user)
    {
        $this->userRepository->delete($user);

        return to_route('admin.users.index');
    }

    public function updateStatus(User $user)
    {
        $status = $user->status->is(Status::ACTIVE) ? Status::INACTIVE : Status::ACTIVE;

        $this->userRepository->updateStatus($user, $status);

        return to_route('admin.users.index');
    }

    public function passwordReset(User $user)
    {
        $data = [
            'password' => User::DEFAULT_PASSWORD,
        ];

        $this->userRepository->update($user, $data);

        return to_route('admin.users.index');
    }
}
