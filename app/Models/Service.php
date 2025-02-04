<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Service extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasTranslations;

    protected $fillable = [
        'title',
        'description',
        'details',
        'features',
        'contact_number',
    ];

    public array $translatable = ['title', 'description', 'features'];

    protected $casts = [
        'details' => 'array',
    ];

    // Icon and brochure
}
