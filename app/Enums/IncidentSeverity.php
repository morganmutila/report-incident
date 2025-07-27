<?php

namespace App\Enums;

enum IncidentSeverity string{
    case LOW = 'low';
    case MODERATE = 'moderate';
    case HIGH = 'high';
    case CRITICAL = 'critical';
}
