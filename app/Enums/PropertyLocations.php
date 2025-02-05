<?php

namespace App\Enums;

use App\Traits\EnumHelpers;

enum PropertyLocations: string
{
    use EnumHelpers;

    case RIYADH = 'riyadh';
    case JEDDAH = 'jeddah';
}
