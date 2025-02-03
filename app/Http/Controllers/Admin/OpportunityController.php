<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OpportunityRequest;
use App\Models\Opportunity;
use App\Repositories\OpportunityRepository;

class OpportunityController extends Controller
{
    public function __construct(
        private OpportunityRepository $opportunityRepository
    ) {}

    public function index()
    {
        $opportunities = $this->opportunityRepository->getAll();

        return view('admin.opportunity.index', compact('opportunities'));
    }

    public function create()
    {
        return view('admin.opportunity.create');
    }

    public function store(OpportunityRequest $request)
    {
        $this->opportunityRepository->create($request->validated());

        return to_route('admin.opportunities.index');
    }

    public function show(Opportunity $opportunity)
    {
        return view('admin.opportunity.show', compact('opportunity'));
    }

    public function edit(Opportunity $opportunity)
    {
        return view('admin.opportunity.edit', compact('opportunity'));
    }

    public function update(OpportunityRequest $request, Opportunity $opportunity)
    {
        $this->opportunityRepository->update($opportunity, $request->validated());

        return to_route('admin.opportunities.index');
    }

    public function destroy(Opportunity $opportunity)
    {
        return $this->opportunityRepository->delete($opportunity);
    }
}
