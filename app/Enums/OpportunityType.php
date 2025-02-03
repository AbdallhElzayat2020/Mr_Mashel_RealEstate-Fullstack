<?php

namespace App\Enums;

use App\Traits\EnumHelpers;

enum OpportunityType: string
{
    use EnumHelpers;

    case EMPLOYMENT = 'employment';
    case TRAINING = 'training';
}
