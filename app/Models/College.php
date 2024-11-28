<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class College extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * Relationship Methods
     */
    public function campus(): BelongsTo
    {
        return $this->belongsTo(Campus::class);
    }
}
