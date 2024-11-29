<?php

namespace App\Notifications;

use App\Models\Waiver;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class WaiverSubmittedForApprovalNotification extends Notification
{
    use Queueable;

    public function __construct(public Waiver $waiver) {}

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toDatabase(object $notifiable): array
    {
        return [
            'subject' => 'New waiver submitted for approval',
            'description' => sprintf(
                'Nagsubmit si %s ug new waiver for your approval',
                $this->waiver->employee->user->name
            ),
            'route' => [
                'name' => 'waivers.show',
                'params' => ['waiver' => $this->waiver->id],
            ],
        ];
    }
}
