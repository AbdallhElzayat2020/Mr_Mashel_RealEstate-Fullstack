<?php

namespace App\Enums;

use App\Traits\EnumHelpers;

enum PropertyStatus: string
{
    use EnumHelpers;

    case RENT = 'rent';
    case SALE = 'sale';
}
