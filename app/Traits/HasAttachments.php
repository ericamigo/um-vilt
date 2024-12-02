<?php

namespace App\Traits;

use App\Models\Attachment;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait HasAttachments
{
    public function attachments(): MorphMany
    {
        return $this->morphMany(Attachment::class, 'model');
    }

    public function uploadFile(UploadedFile $file)
    {
        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs(
            'attachments',
            Str::of($fileName)
                ->beforeLast('.')
                ->slug()
                ->append('-')
                ->append(Carbon::now()->timestamp)
                ->append('.')
                ->append($file->getClientOriginalExtension())
                ->lower()
        );

        $this->attachments()
            ->create([
                'file_name' => $fileName,
                'path' => $path,
            ]);
    }

    public function deleteAllAttachments()
    {
        $first = $this->attachments->first();

        if ($first) {
            Storage::deleteDirectory(
                Str::of($first->path)->beforeLast('/')
            );
        }

        $this->attachments()->delete();
    }
}
