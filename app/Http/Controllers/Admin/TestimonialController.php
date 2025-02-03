<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TestimonialRequest;
use App\Models\Testimonial;
use App\Repositories\TestimonialRepository;

class TestimonialController extends Controller
{
    public function __construct(
        private TestimonialRepository $testimonialRepository
    ) {}

    public function index()
    {
        $testimonials = $this->testimonialRepository->getAll();

        return view('admin.testimonial.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(TestimonialRequest $request)
    {
        $this->testimonialRepository->create($request->validated());

        return to_route('admin.testimonials.index');
    }

    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonial.show', compact('testimonial'));
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    public function update(TestimonialRequest $request, Testimonial $testimonial)
    {
        $this->testimonialRepository->update($testimonial, $request->validated());

        return to_route('admin.testimonials.index');
    }

    public function destroy(Testimonial $testimonial)
    {
        $this->testimonialRepository->delete($testimonial);

        return redirect()->route('admin.testimonials.index');
    }
}
