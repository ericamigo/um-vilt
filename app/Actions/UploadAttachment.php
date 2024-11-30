<?php

namespace App\Actions;

use App\Models\Attachment;
use App\Models\Beneficiary;
use App\Models\Waiver;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UploadAttachment
{
    public function handle(object $model, $file): Attachment
    {
        $subfolder = match (get_class($model)) {
            Waiver::class => 'waiver',
            Beneficiary::class => 'beneficiary',
            default => 'undefined',
        };

        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs(
            "attachment/{$subfolder}/{$model->id}",
            Str::lower(
                Str::slug($fileName) . '-' . Carbon::now()->timestamp . '.' . $file->getClientOriginalExtension())
            );

        return $model->attachments()
            ->create([
                'file_name' => $fileName,
                'path' => $path,
            ]);
    }
}
