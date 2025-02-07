<?php

namespace App\Models;

use App\Enums\Status;
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

    public array $translatable = ['title', 'description', 'features'];

    protected $casts = [
      'status' => Status::class,
    ];
}
