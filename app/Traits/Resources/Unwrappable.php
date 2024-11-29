<?php

namespace App\Traits\Resources;

use Illuminate\Support\Collection;

trait Unwrappable
{
    public static function unwrapped(object|array $collection): Collection
    {
        if (! $collection instanceof Collection) {
            $collection = Collection::make($collection);
        }

        return self::collection($collection)->collection;
    }
}
