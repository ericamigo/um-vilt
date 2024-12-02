<?php

namespace App\Models;

use App\Traits\HasAttachments;
use App\Traits\HasUlid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Beneficiary extends Model
{
    use HasAttachments;
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
