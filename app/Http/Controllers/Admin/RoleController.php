<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Repositories\PermissionRepositoryInterface;
use App\Contracts\Repositories\RoleRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Role\RoleRequest;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct(
        private RoleRepositoryInterface $roleRepository,
        private PermissionRepositoryInterface $permissionRepository
    ) {}

    public function index()
    {
        $roles = $this->roleRepository->getAll();

        return view('dashboard.pages.roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = $this->permissionRepository->getAll();

        return view('dashboard.pages.roles.create', compact('permissions'));
    }

    public function store(RoleRequest $request)
    {
        $this->roleRepository->create($request->validated());

        return to_route('admin.roles.index');
    }

    public function show(Role $role) {}

    public function edit(Role $role)
    {
        $role->load('permissions');

        $rolePermissions = $role->permissions->pluck('id')->toArray();

        $permissions = $this->permissionRepository->getAll();

        return view('dashboard.pages.roles.edit', compact('role', 'permissions', 'rolePermissions'));
    }

    public function update(RoleRequest $request, Role $role)
    {
        $this->roleRepository->update($role, $request->validated());

        return to_route('admin.roles.index');
    }

    public function destroy(Role $role)
    {
        $this->roleRepository->delete($role);

        return to_route('admin.roles.index');
    }
}
