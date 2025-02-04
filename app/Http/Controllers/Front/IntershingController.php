<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class IntershingController extends Controller
{
    public function index()
    {
        return view('website.pages.Internship');
    }
}
