<?php

use App\Enums\OfferPriceType;
use App\Enums\OfferType;
use App\Enums\PropertyLocations;
use App\Enums\PropertyType;
use App\Enums\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('short_title');
            $table->text('description');
            $table->text('short_description');
            $table->unsignedDouble('price');
            $table->enum('status', Status::values())->comment(Status::comment());
            $table->enum('price_type', OfferPriceType::values())->comment(OfferPriceType::comment());
            $table->enum('property_type', PropertyType::values())->comment(PropertyType::comment());
            $table->enum('offer_type', OfferType::values())->comment(OfferType::comment());
            $table->enum('location', PropertyLocations::values())->comment(PropertyLocations::comment());
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
