<?php

namespace App\Models;

use App\Enums\Semester;
use App\Enums\Statuses\WaiverStatus;
use App\Traits\HasAttachments;
use App\Traits\HasUlid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Waiver extends Model
{
    use HasAttachments;
    use HasUlid;

    protected $fillable = [
        'year',
        'semester',
        'status',
        'employee_id',
    ];

    protected function casts(): array
    {
        return [
            'year' => 'integer',
            'semester' => Semester::class,
            'status' => WaiverStatus::class,
        ];
    }

    /**
     * Relationship Methods
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function beneficiaries(): HasMany
    {
        return $this->hasMany(Beneficiary::class);
    }
}
