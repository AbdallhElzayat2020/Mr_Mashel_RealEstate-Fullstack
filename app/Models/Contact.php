<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact_inquiries';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'service_id',
        'message',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
