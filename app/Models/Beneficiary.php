<?php

namespace App\Models;

use App\Traits\HasUlid;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasUlid;

    protected $fillable = [
        'relationship',
        'student_id',
        'waiver_id',
    ];
}
