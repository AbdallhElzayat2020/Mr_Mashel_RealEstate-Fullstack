<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Service extends Model implements HasMedia
{
    use HasFactory, HasTranslations, InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'details',
        'contact_number',
    ];

    public array $translatable = ['title', 'description', 'features'];

    protected $casts = [
        'details' => 'array',
    ];

    public function features(): HasMany
    {
        return $this->hasMany(ServiceFeature::class, 'service_id');
    }

    // Icon and brochure
}
