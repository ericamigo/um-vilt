<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Campus extends Model
{
    protected $fillable = [
        'name',
        'branch_id',
    ];

    /**
     * Relationship Methods
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }

    public function colleges(): HasMany
    {
        return $this->hasMany(College::class);
    }

    public function offices(): BelongsToMany
    {
        return $this->belongsToMany(Office::class);
    }
}
