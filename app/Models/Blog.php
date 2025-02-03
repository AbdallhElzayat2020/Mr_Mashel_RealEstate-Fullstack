<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'admin_id',
        'content',
        'excerpt',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}
