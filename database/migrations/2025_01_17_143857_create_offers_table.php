<?php

use App\Enums\OfferPriceType;
use App\Enums\PropertyLocations;
use App\Enums\PropertyStatus;
use App\Enums\PropertyType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('short_title');
            $table->text('description');
            $table->string('short_description');
            $table->unsignedDouble('price');
            $table->enum('price_type', OfferPriceType::values())->comment(OfferPriceType::comment());
//            $table->string('location');
            $table->boolean('is_active')->default(true);
            $table->enum('type', PropertyType::values())->comment(PropertyType::comment());
            $table->enum('status', PropertyStatus::values())->comment(PropertyStatus::comment());
            $table->enum('location', PropertyLocations::values())->comment(PropertyLocations::comment());
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
