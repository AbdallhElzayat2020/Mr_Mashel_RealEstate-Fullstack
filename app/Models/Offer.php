<?php

namespace App\Models;

use App\Enums\OfferPriceType;
use App\Enums\PropertyLocations;
use App\Enums\OfferType;
use App\Enums\PropertyType;
use App\Enums\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Offer extends Model implements HasMedia
{
    use HasFactory, HasTranslations, InteractsWithMedia;

    protected $fillable = [
        'title',
        'short_title',
        'description',
        'short_description',
        'price',
        'status',
        'price_type',
        'property_type',
        'offer_type',
        'location',
    ];

    public array $translatable = ['title', 'short_title', 'description', 'short_description'];

    protected $casts = [
        'price_type' => OfferPriceType::class,
        'location' => PropertyLocations::class,
        'property_type' => PropertyType::class,
        'offer_type' => OfferType::class,
        'status' => Status::class,
    ];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', Status::ACTIVE);
    }

    public function scopeFilter(Builder $query): Builder
    {
        return $query;
    }

    public function details(): HasMany
    {
        return $this->hasMany(OfferDetail::class, 'offer_id');
    }

    // GALLERY
    // brochure
}
