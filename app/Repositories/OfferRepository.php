<?php

namespace App\Repositories;

use App\Contracts\Repositories\OfferRepositoryInterface;
use App\Models\Offer;

class OfferRepository implements OfferRepositoryInterface
{
    public function getAll(array $cols = ['*'], bool $paginate = true)
    {
        $offers = Offer::select($cols);

        if ($paginate) {
            return $offers->paginate();
        }

        return $offers->get();
    }

    public function getById(int $id, array $cols = ['*'])
    {
        return Offer::findOrFail($id, $cols);
    }

    public function create(array $data)
    {
        return Offer::create($data);
    }

    public function update(Offer $offer, array $data)
    {
        return $offer->update($data);
    }

    public function delete(Offer $offer)
    {
        return $offer->delete();
    }
}
