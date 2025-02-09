<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Repositories\ServiceRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{
    public function __construct(
        private ServiceRepositoryInterface $serviceRepository
    ) {
        $this->middleware('can:update-services')->only(['edit', 'update']);
        $this->middleware('can:delete-services')->only(['destroy']);
        $this->middleware('can:create-services')->only(['create', 'store']);
        $this->middleware('can:view-services')->only(['index', 'show']);
    }

    public function index()
    {
        $services = $this->serviceRepository->getAll();

        return view('dashboard.pages.services.index', compact('services'));
    }

    public function create()
    {
        return view('dashboard.pages.services.create');
    }

    public function store(ServiceRequest $request)
    {
        $this->serviceRepository->create($request->validated());

        return to_route('admin.services.index');
    }

    public function show(Service $service)
    {
        return view('dashboard.pages.services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        $service->load('features');

        return view('dashboard.pages.services.edit', compact('service'));
    }

    public function update(ServiceRequest $request, Service $service)
    {
        $this->serviceRepository->update($service, $request->validated());

        return to_route('admin.services.index');
    }

    public function destroy(Service $service)
    {
        $this->serviceRepository->delete($service);

        return to_route('admin.services.index');
    }
}
