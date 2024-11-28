<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CampusResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'branch' => BranchResource::make($this->whenLoaded('branch')),
            'colleges' => CollegeResource::collection($this->whenLoaded('colleges')),
        ];
    }
}
