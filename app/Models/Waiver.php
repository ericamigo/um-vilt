<?php

namespace App\Models;

use App\Enums\Semester;
use App\Enums\Statuses\WaiverStatus;
use Illuminate\Database\Eloquent\Model;

class Waiver extends Model
{
    protected $fillable = [
        'year',
        'semester',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'year' => 'integer',
            'semester' => Semester::class,
            'status' => WaiverStatus::class,
        ];
    }
}
