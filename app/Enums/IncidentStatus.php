<?php

namespace App\Enums;

enum IncidentStatus: string{
    case PENDING = 'pending';
    case IN_PROGRESS = 'in_progress';
    case RESOLVED = 'resolved';
    case VERIFIED = 'verified';
    case DISMISSED = 'dismissed';
}
