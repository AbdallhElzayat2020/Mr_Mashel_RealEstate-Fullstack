<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class TermsController extends Controller
{
    public function index()
    {
        Artisan::call('optimize:clear');
        return view('website.pages.polices');
    }
}
