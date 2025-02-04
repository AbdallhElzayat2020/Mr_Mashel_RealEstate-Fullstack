<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('website.pages.Blog');
    }

    public function show()
    {
        return view('website.pages.Blog-details');
    }
}
