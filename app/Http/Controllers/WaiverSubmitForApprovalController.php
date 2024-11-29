<?php

namespace App\Http\Controllers;

use App\Enums\Statuses\WaiverStatus;
use App\Models\Employee;
use App\Models\User;
use App\Models\Waiver;
use App\Notifications\WaiverSubmittedForApprovalNotification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Redirect;

class WaiverSubmitForApprovalController extends Controller
{
    public function __invoke(Waiver $waiver): RedirectResponse
    {
        abort_unless(
            $waiver->status == WaiverStatus::New and
            $waiver->beneficiaries->isNotEmpty(), 403);

        // $waiver->update([
        //     'status' => WaiverStatus::ForApproval,
        // ]);

        Notification::send(
            User::inRandomOrder()->take(mt_rand(2, 5))->get(),
            new WaiverSubmittedForApprovalNotification(
                $waiver->load('employee.user')
            )
        );

        return Redirect::back();
    }
}
