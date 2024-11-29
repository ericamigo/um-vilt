<?php

namespace App\Models;

use App\Traits\HasUlid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use PHPUnit\Framework\MockObject\Builder\Stub;

class Beneficiary extends Model
{
    use HasUlid;

    protected $fillable = [
        'relationship',
        'student_id',
        'waiver_id',
    ];

    /**
     * Relationship Methods
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
