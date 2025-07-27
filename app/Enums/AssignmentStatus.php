<?php

namespace App\Enums;

enum AssignmentStatus: string {
    case NOTIFIED = 'notified';
    case ACCEPTED = 'accepted';
    case IN_PROGRESS = 'in_progress';
    case RESOLVED = 'resolved';
    case DISMISSED = 'dismissed';
}
