<?php

namespace App\Repositories;

use App\Contracts\Repositories\OfferRepositoryInterface;
use App\Models\Offer;
use Illuminate\Support\Facades\DB;

class OfferRepository implements OfferRepositoryInterface
{
    public function getAll(array $cols = ['*'], array $relations = [], bool $paginate = true)
    {
        $offers = Offer::filter()->select($cols);

        if (count($relations)) {
            $offers = $offers->with($relations);
        }

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
        DB::transaction(function () use ($data) {
            $offer = Offer::create($data);

            $this->CreateDetails($data, $offer);
        });
    }

    public function update(Offer $offer, array $data)
    {
        DB::transaction(function () use ($offer, $data) {
            $offer->update($data);

            $offer->details()->delete();

            $this->CreateDetails($data, $offer);
        });
    }

    public function delete(Offer $offer)
    {
        $offer->details()->delete();

        $offer->delete();
    }

    public function CreateDetails(array $data, Offer $offer): void
    {
        $details = [
            [
                'key' => 'property_specifications',
                'section' => json_encode(['ar' => 'مواصفات العقار', 'en' => 'Property Specifications']),
                'data' => json_encode($data['property_specifications']),
                'offer_id' => $offer->id,
            ],
            [
                'key' => 'property_contents',
                'section' => json_encode(['ar' => 'محتويات العقار', 'en' => 'Property Contents']),
                'data' => json_encode($data['property_contents']),
                'offer_id' => $offer->id,
            ],
            [
                'key' => 'property_features',
                'section' => json_encode(['ar' => 'مميزات العقار', 'en' => 'Property Features']),
                'data' => json_encode($data['property_features']),
                'offer_id' => $offer->id,
            ],
            [
                'key' => 'financial_communication',
                'section' => json_encode(['ar' => 'المالية والتواصل', 'en' => 'Financial & Communication']),
                'data' => json_encode($data['financial_communication']),
                'offer_id' => $offer->id,
            ],
        ];

        DB::table('offer_details')->insert($details);
    }
}
