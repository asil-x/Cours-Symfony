<?php

namespace App\Enum;

enum MediaMediaTypeEnum: string
{
    case AUDIO = 'audio';
    case VIDEO = 'video';
    case IMAGE = 'image';
    case DOCUMENT = 'document';
    case OTHER = 'other';
}