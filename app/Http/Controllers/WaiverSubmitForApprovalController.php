<?php

namespace App\Http\Controllers;

use App\Enums\Statuses\WaiverStatus;
use App\Models\Waiver;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WaiverSubmitForApprovalController extends Controller
{
    public function __invoke(Waiver $waiver): RedirectResponse
    {
        abort_unless(
            $waiver->status == WaiverStatus::New and
            $waiver->beneficiaries->isNotEmpty(), 403);

        $waiver->update([
            'status' => WaiverStatus::ForApproval,
        ]);

        return Redirect::back();
    }
}
