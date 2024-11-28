<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasUlid
{
    public static function bootHasUlid(): void
    {
        static::creating(function (object $model) {
            $model->ulid = str_replace('-', '', Str::ulid());
        });
    }

    public function getRouteKeyName()
    {
        return 'ulid';
    }
}