<?php

namespace App\Enums;

use App\Traits\EnumHelpers;

enum OfferType: string
{
    use EnumHelpers;

    case RENT = 'rent';
    case SALE = 'sale';
}
