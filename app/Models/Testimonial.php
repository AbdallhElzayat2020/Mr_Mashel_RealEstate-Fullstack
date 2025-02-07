<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Testimonial extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'client_name',
        'company_name',
        'testimonial',
        'status',
    ];

    protected $casts = [
        'status' => Status::class,
    ];

    public function scopeFilter(Builder $query): Builder
    {
        $query->when(request('status'), function (Builder $query, $status) {
            $query->where('status', $status);
        });

        $query->when(request('s'), function (Builder $query, $value) {
            $query->where('client_name', 'like', "%{$value}%")
                ->orWhere('company_name', 'like', "%{$value}%");
        });

        return $query;
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', Status::ACTIVE);
    }
}
