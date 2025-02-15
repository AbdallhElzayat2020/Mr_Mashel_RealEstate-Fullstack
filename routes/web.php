<?php

use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HireingController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\IntershingController;
use App\Http\Controllers\Front\OfferController;
use App\Http\Controllers\Front\ServicesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function () {
//    return view('dashboard.pages.index');
// });

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ], function () {

        Route::get('/', [HomeController::class, 'index'])->name('home');

        Route::get('/about', [AboutController::class, 'index'])->name('about');

        Route::get('/services', [ServicesController::class, 'index'])->name('services');

        Route::get('/services-details/{id}', [ServicesController::class, 'show'])->name('service.details');

        Route::get('/offers', [OfferController::class, 'index'])->name('offers');

        Route::get('/offer-details/{id}', [OfferController::class, 'show'])->name('offers.details');

        Route::get('/apply', [HireingController::class, 'index'])->name('apply');

        Route::get('/internship', [IntershingController::class, 'index'])->name('internship');

        Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');

        Route::get('/blogs-details/{id}', [BlogController::class, 'show'])->name('blogs.details');

        Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    });

require __DIR__.'/auth.php';
