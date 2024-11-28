<?php

namespace App\Models;

use App\Traits\HasUlid;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasUlid;

    protected $fillable = [
        'user_id',
        'course_id',
    ];
}
