<?php

namespace App\Enum;

enum CommentStatusEnum: String
{
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';
}