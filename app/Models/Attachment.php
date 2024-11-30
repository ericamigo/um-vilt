<?php

namespace App\Models;

use App\Traits\HasUlid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Attachment extends Model
{
    use HasUlid;

    protected $fillable = [
        'file_name',
        'path',
    ];

    /**
     * Relationship Methods
     */
    public function model(): MorphTo
    {
        return $this->morphTo('model');
    }
}
