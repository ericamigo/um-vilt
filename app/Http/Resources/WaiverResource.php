<?php

namespace App\Http\Resources;

use App\Http\Resources\Enums\SemesterResource;
use App\Traits\Resources\Unwrappable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WaiverResource extends JsonResource
{
    use Unwrappable;

    public static $wrap = null;

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->ulid,
            'year' => $this->year,
            'semester' => SemesterResource::make($this->semester),
            'status' => $this->status,
            'employee' => EmployeeResource::make($this->whenLoaded('employee')),
            'beneficiaries' => BeneficiaryResource::collection($this->whenLoaded('beneficiaries')),
            'beneficiaries_count' => $this->whenCounted('beneficiaries'),
            'created_at' => $this->created_at,
        ];
    }
}
