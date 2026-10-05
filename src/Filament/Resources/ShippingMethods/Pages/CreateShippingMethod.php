<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\ShippingMethods\Pages;

use Filament\Resources\Pages\CreateRecord;
use Reyhan\Core\Filament\Resources\ShippingMethods\ShippingMethodResource;

class CreateShippingMethod extends CreateRecord
{
    protected static string $resource = ShippingMethodResource::class;
}
