<?php

namespace App\Models;

use App\Enums\OpportunityType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Opportunity extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'years_of_exp',
        'field_of_exp',
        'education',
        'job_title',
        'type',
    ];

    protected $casts = [
        'type' => OpportunityType::class,
    ];

    public function scopeTraining(Builder $query): Builder
    {
        return $query->where('type', OpportunityType::TRAINING);
    }

    public function scopeEmployment(Builder $query): Builder
    {
        return $query->where('type', OpportunityType::EMPLOYMENT);
    }
}
