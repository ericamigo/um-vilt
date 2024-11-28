<?php

namespace App\Models;

use App\Traits\HasUlid;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasUlid;

    protected $fillable = [
        'user_id',
        'office_id',
        'campus_id',
    ];
}
