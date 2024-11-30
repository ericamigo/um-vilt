<?php

namespace App\Http\Controllers;

use App\Actions\UploadAttachment;
use App\Models\Attachment;
use App\Models\Waiver;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class WaiverAttachmentsController extends Controller
{
    public function store(Request $request, Waiver $waiver): RedirectResponse
    {
        (new UploadAttachment)->handle($waiver, $request->file('attachment'));

        // $waiver->uploadFile($request->file('attachment'));

        return Redirect::back();
    }

    public function show(Waiver $waiver, Attachment $attachment)
    {
        abort_unless(Storage::exists($attachment->path), 404);

        return Storage::download($attachment->path);
    }

    public function destroy(Waiver $waiver, Attachment $attachment)
    {
        if (Storage::exists($attachment->path)) {
            Storage::delete($attachment->path);
        }

        $attachment->delete();
    }
}
