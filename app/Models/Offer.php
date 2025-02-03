<?php

namespace App\Models;

use App\Enums\OfferPriceType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Offer extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'short_title',
        'short_description',
        'price',
        'price_type',
    ];

    protected $casts = [
        'price_type' => OfferPriceType::class,
    ];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    public function details(): HasMany
    {
        return $this->hasMany(OfferDetail::class, 'offer_id');
    }

    // GALLERY
    // brochure
}
