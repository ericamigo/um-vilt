<?php

namespace App\Http\Resources\Enums;

use App\Traits\Resources\Unwrappable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SemesterResource extends JsonResource
{
    use Unwrappable;

    public static $wrap = null;

    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'value' => $this->value,
        ];
    }
}
