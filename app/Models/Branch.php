<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Branch extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * Relationship Methods
     */
    public function campuses(): HasMany
    {
        return $this->hasMany(Campus::class);
    }

    /**
     * Accesor / Mutator Methods
     */
    protected function code(): Attribute
    {
        return Attribute::make(
            get: function (mixed $value, array $attributes) {
                return Str::slug(implode(' ', [
                    $attributes['id'],
                    $attributes['name'],
                ]));
            }
        );
    }
}
