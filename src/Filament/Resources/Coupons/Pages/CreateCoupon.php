<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\Coupons\Pages;

use Filament\Resources\Pages\CreateRecord;
use Reyhan\Core\Filament\Resources\Coupons\CouponResource;

class CreateCoupon extends CreateRecord
{
    protected static string $resource = CouponResource::class;
}
