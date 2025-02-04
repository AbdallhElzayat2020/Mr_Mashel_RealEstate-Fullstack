<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //

    public function index()
    {
        return view('website.pages.Services');
    }

    public function show()
    {
        return view('website.pages.Services-details');
    }
}
