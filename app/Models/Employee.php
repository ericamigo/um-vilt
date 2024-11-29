<?php

namespace App\Models;

use App\Traits\HasUlid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasUlid;

    protected $fillable = [
        'user_id',
        'office_id',
        'campus_id',
    ];

    /**
     * Relationship Methods
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function waivers(): HasMany
    {
        return $this->hasMany(Waiver::class);
    }
}
