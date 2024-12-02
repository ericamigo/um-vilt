<?php

namespace App\Http\Controllers;

use App\Actions\UploadAttachment;
use App\Models\Attachment;
use App\Models\Beneficiary;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;

class BeneficiaryAttachmentsController extends Controller
{
    public function store(Request $request, Beneficiary $beneficiary): RedirectResponse
    {
        $beneficiary->uploadFile($request->file('attachment'));

        return Redirect::back();
    }

    public function show(Beneficiary $beneficiary, Attachment $attachment): StreamedResponse
    {
        abort_unless(Storage::exists($attachment->path), 404);

        return Storage::download($attachment->path);
    }

    public function destroy(Beneficiary $beneficiary, Attachment $attachment): RedirectResponse
    {
        if (Storage::exists($attachment->path)) {
            Storage::delete($attachment->path);
        }

        $attachment->delete();

        if ($beneficiary->attachments->isEmpty()) {
            Storage::deleteDirectory(
                Str::of($attachment->path)->beforeLast('/')
            );
        }

        return Redirect::back();
    }
}
