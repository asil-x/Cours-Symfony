<?php

namespace App\Enum;

enum AccountStatusEnum: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case SUSPENDED = 'suspended';
    case CANCELLED = 'cancelled';
}
