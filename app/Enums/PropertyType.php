<?php

namespace App\Enums;

use App\Traits\EnumHelpers;

enum PropertyType: string
{
    use EnumHelpers;

    case VILLA = 'villa';
    case APARTMENT = 'apartment';
}
