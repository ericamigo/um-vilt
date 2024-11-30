<?php

namespace App\Http\Resources;

use App\Traits\Resources\Unwrappable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BeneficiaryResource extends JsonResource
{
    use Unwrappable;

    public static $wrap = null;

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->ulid,
            'relationship' => $this->relationship,
            'student' => StudentResource::make($this->whenLoaded('student')),
            'attachments' => AttachmentResource::collection($this->whenLoaded('attachments')),
        ];
    }
}
