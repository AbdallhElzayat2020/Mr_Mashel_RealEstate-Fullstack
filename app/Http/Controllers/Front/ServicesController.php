<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Testimonial;

class ServicesController extends Controller
{
    //

    public function index()
    {
        $services = Service::active()->latest()->get();

        $testimonials = Testimonial::active()->latest()->get();

        return view('website.pages.Services', compact('services', 'testimonials'));
    }

    public function show(string $serviceId)
    {
        $service = Service::active()->firstWhere(['id' => $serviceId]);

        if (! $service) {
            abort(404);
        }

        $service->loadMissing(['media']);

        return view('website.pages.Services-details', compact('service'));
    }
}
