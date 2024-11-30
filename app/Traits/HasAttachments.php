<?php

namespace App\Traits;

use App\Models\Attachment;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait HasAttachments
{
    public function attachments(): MorphMany
    {
        return $this->morphMany(Attachment::class, 'model');
    }

    public function uploadFile($file)
    {
        $fileName = $file->getClientOriginalName();
        $path = $file->store('attachments');

        $this->attachments()
            ->create([
                'file_name' => $fileName,
                'path' => $path,
            ]);
    }

    public function deleteAllAttachments()
    {
        foreach ($this->attachments as $attachment) {
            try {
                Storage::delete($attachment->path);
            } catch (\Throwable $th) {
                Log::alert($th->getMessage());
            }

            $attachment->delete();
        }
    }
}
