<?php

namespace App\Enums\Statuses;

enum WaiverStatus: string
{
    case New = 'new';
    case ForApproval = 'for-approval';
    case Approved = 'approved';
}
