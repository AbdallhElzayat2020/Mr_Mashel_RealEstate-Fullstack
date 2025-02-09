<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Repositories\OfferRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OfferRequest;
use App\Models\Offer;

class OfferController extends Controller
{
    public function __construct(
        private OfferRepositoryInterface $offerRepository
    ) {}

    public function index()
    {
        $offers = $this->offerRepository->getAll();

        return view('dashboard.pages.offer.index', compact('offers'));
    }

    public function create()
    {
        return view('dashboard.pages.offer.create');
    }

    public function store(OfferRequest $request)
    {
        $this->offerRepository->create($request->validated());

        return to_route('admin.offers.index');
    }

    public function show(Offer $offer)
    {
        return view('dashboard.pages.offer.show', compact('offer'));
    }

    public function edit(Offer $offer)
    {
        $offer->load('details');

        //        dd($offer->details);

        return view('dashboard.pages.offer.edit', compact('offer'));
    }

    public function update(OfferRequest $request, Offer $offer)
    {
        $this->offerRepository->update($offer, $request->validated());

        return to_route('admin.offers.index');
    }

    public function destroy(Offer $offer)
    {
        $this->offerRepository->delete($offer);

        return to_route('admin.offers.index');
    }
}
