<?php

namespace App\Enums;

enum MediaTypes: string
{
    case IMAGE = 'image';
    case VIDEO = 'video';
    case AUDIO = 'audio';
    case DOCUMENT = 'document';
    case OTHER = 'other';
}
