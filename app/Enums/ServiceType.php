<?php

namespace App\Enums;

enum ServiceType: string{
    case POLICE = 'police';
    case FIRE = 'fire';
    case AMBULANCE = 'ambulance';
    case OTHER = 'other';
}
