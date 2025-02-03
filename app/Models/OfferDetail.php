<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OfferDetail extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'offer_id',
        'section',
        'data',
    ];

    protected $casts = [
        'data' => 'array',
    ];

    public function offer(): BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }
}
