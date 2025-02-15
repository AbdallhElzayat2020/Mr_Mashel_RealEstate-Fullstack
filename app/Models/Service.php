<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class Service extends Model implements HasMedia
{
    use HasFactory, HasTranslations, InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'short_description',
        'contact_number',
        'status',
    ];

    public array $translatable = ['title', 'description', 'short_description'];

    protected $casts = [
        'status' => Status::class,
    ];

    public function scopeFilter(Builder $query): Builder
    {
        $query->when(request('s_s'), static function ($query, $value) {
            $query->where('title', 'like', "%{$value}%");
        });

        return $query;
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', Status::ACTIVE);
    }

    public function features(): HasMany
    {
        return $this->hasMany(ServiceFeature::class, 'service_id');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')
            ->useFallbackUrl(asset('assets/dashboard/assets/img/user.png'))
            ->useDisk('files')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp', 'image/svg', 'image/jpg']);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(100)
            ->height(100)
            ->nonQueued();
    }

    public function getImageUrl(): string
    {
        return $this->getFirstMediaUrl('image');
    }

    public function getThumbUrl(): string
    {
        return $this->getFirstMediaUrl('image', 'thumb');
    }

    // TODO:  Icon and brochure, image
}
