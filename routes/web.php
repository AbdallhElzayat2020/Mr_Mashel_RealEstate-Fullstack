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

Route::get('/services-details/{id}', [\App\Http\Controllers\Front\ServicesController::class, 'show'])->name('service-details');

Route::get('/projects', [\App\Http\Controllers\Front\ProjectsController::class, 'index'])->name('projects');

Route::get('/projects-details/{id}', [\App\Http\Controllers\Front\ProjectsController::class, 'show'])->name('project-details');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
