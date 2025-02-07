<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'user_id',
        'content',
        'excerpt',
        'status',
    ];

    public array $translatable = ['title', 'content', 'excerpt'];

    protected $casts = [
        'status' => Status::class,
    ];

    public function scopeFilter(Builder $query): Builder
    {
        $query->when(request('status'), function (Builder $query, $status) {
            $query->where('status', $status);
        });

        $query->when(request('s'), function (Builder $query, $s) {
            $query->where('title', 'LIKE', "%{$s}%");
        });

        return $query;
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', Status::ACTIVE);
    }

    protected static function booted()
    {
        parent::booted();

        self::creating(function (Blog $blog) {
            $blog->user_id = auth()->id();
        });
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id')
            ->withDefault();
    }
}
