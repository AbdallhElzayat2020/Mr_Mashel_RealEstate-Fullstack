<?php

namespace App\Repositories;

use App\Contracts\Repositories\ServiceRepositoryInterface;
use App\Models\Service;

class ServiceRepository implements ServiceRepositoryInterface
{
    public function getAll(array $cols = ['*'], bool $paginate = true)
    {
        $services = Service::query();

        if ($paginate) {
            return $services->paginate();
        }

        return $services->get();
    }

    public function getAllWithFeatures()
    {
        return Service::query()->with(['features'])->paginate();
    }

    public function getById(int $id, array $cols = ['*'])
    {
        return Service::findOrFail($id, $cols);
    }

    public function create(array $data)
    {
        $service = Service::create($data);

        $service->features()->createMany($data['features']);
    }

    public function update(Service $service, array $data)
    {
        $service->update($data);

        $service->features()->delete();

        $service->features()->createMany($data['features']);
    }

    public function delete(Service $service)
    {
        $service->features()->delete();
        $service->delete();
    }
}
