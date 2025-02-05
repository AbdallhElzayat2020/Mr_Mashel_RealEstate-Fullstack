<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class ServiceFeature extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'service_id',
        'title',
    ];

    public $timestamps = false;

    public array $translatable = ['title'];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
