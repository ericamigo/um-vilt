<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BranchResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'code' => $this->code,
            'campuses_count' => $this->whenCounted('campuses'),
            'campuses' => CampusResource::collection($this->whenLoaded('campuses')),
        ];
    }
}
