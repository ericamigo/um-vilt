<?php

namespace App\Http\Controllers;

use App\Actions\UploadAttachment;
use App\Models\Beneficiary;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BeneficiaryAttachmentsController extends Controller
{
    public function store(Request $request, Beneficiary $beneficiary): RedirectResponse
    {
        (new UploadAttachment)->handle($beneficiary, $request->file('attachment'));
        // $beneficiary->uploadFile($request->file('attachment'));

        return Redirect::back();
    }
}
