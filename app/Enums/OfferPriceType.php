<?php

namespace App\Enums;

use App\Traits\EnumHelpers;

enum OfferPriceType: string
{
    use EnumHelpers;

    case MONTHLY = 'monthly';
    case ANNUAL = 'annual';
}
