<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OfferRequest;
use App\Models\Offer;
use App\Repositories\OfferRepository;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function __construct(
        private OfferRepository $offerRepository
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
        return view('dashboard.pages.offer.edit', compact('offer'));
    }

    public function update(Request $request, Offer $offer)
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
