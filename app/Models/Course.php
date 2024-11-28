<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * Relationship Methods
     */
    public function college(): BelongsTo
    {
        return $this->belongsTo(College::class);
    }
}
