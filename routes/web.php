<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', [\App\Http\Controllers\Front\HomeController::class, 'index'])->name('home');

Route::get('/about', [\App\Http\Controllers\Front\AboutController::class, 'index'])->name('about');

Route::get('/services', [\App\Http\Controllers\Front\ServicesController::class, 'index'])->name('services');

//Route::get('/services-details/{id}', [\App\Http\Controllers\Front\ServicesController::class, 'show'])->name('service-details');
Route::get('/services-details', [\App\Http\Controllers\Front\ServicesController::class, 'show'])->name('service-details');

Route::get('/projects', [\App\Http\Controllers\Front\ProjectsController::class, 'index'])->name('projects');

//Route::get('/projects-details/{id}', [\App\Http\Controllers\Front\ProjectsController::class, 'show'])->name('project-details');
Route::get('/projects-details', [\App\Http\Controllers\Front\ProjectsController::class, 'show'])->name('project-details');

Route::get('/projects', [\App\Http\Controllers\Front\ProjectsController::class, 'index'])->name('projects');

Route::get('/hireing', [\App\Http\Controllers\Front\HireingController::class, 'index'])->name('hire');

Route::get('/internship', [\App\Http\Controllers\Front\IntershingController::class, 'index'])->name('internship');

Route::get('/blogs', [\App\Http\Controllers\Front\BlogController::class, 'index'])->name('blogs');

//Route::get('/blogs-details/{id}', [\App\Http\Controllers\Front\BlogController::class, 'show'])->name('blogs-details');
Route::get('/blogs-details', [\App\Http\Controllers\Front\BlogController::class, 'show'])->name('blogs-details');

Route::get('/contact', [\App\Http\Controllers\Front\ContactController::class, 'index'])->name('contact');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__ . '/auth.php';
