<?php

namespace App\Models;

use App\Enums\OfferPriceType;
use App\Enums\PropertyLocations;
use App\Enums\PropertyStatus;
use App\Enums\PropertyType;
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
        'price_type',
        'location',
        'is_active',
        'type',
        'status',
    ];

    public array $translatable = ['title', 'short_title', 'description', 'short_description'];

    protected $casts = [
        'price_type' => OfferPriceType::class,
        'location' => PropertyLocations::class,
        'type' => PropertyType::class,
        'status' => PropertyStatus::class,
    ];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
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
