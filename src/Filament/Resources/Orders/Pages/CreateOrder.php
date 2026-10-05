<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\Orders\Pages;

use Filament\Resources\Pages\CreateRecord;
use Reyhan\Core\Filament\Resources\Orders\OrderResource;

class CreateOrder extends CreateRecord
{
    protected static string $resource = OrderResource::class;
}
