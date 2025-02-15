<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Offer;
use App\Models\Service;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::active()->with(['media'])->get();

        $services = Service::active()->with(['media'])->get();

        $blogs = Blog::active()->with(['media'])->latest()->limit(3)->get();

        $offers = Offer::active()->with(['media'])->latest()->limit(3)->get();

        return view('website.pages.Home', compact('testimonials', 'services', 'blogs', 'offers'));
    }
}
