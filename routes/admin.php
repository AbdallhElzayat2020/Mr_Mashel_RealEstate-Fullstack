<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\MailSubscriptionController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\OpportunityController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;

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
