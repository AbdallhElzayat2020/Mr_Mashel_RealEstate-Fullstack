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

    public function getById(int $id, array $cols = ['*'])
    {
        return Service::findOrFail($id, $cols);
    }

    public function create(array $data)
    {
        return Service::create($data);
    }

    public function update(Service $service, array $data)
    {
        return $service->update($data);
    }

    public function delete(Service $service)
    {
        return $service->delete();
    }
}
