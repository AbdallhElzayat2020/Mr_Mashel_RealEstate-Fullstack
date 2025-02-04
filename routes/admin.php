<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\MailSubscriptionController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\OpportunityController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\ProfileController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




Route::resource('blogs', BlogController::class);

Route::resource('offers', OfferController::class);

Route::resource('contacts', ContactController::class);

Route::resource('services', ServiceController::class);

Route::resource('testimonials', TestimonialController::class);

Route::resource('opportunities', OpportunityController::class);




Route::prefix('mail-subscriptions')
    ->as('mail-subscriptions.')
    ->controller(MailSubscriptionController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::delete('{mailSubscription}', 'destroy')->name('destroy');
    });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



