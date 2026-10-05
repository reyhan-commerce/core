<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\OrderReturns\Pages;

use Filament\Resources\Pages\ViewRecord;
use Reyhan\Core\Filament\Resources\OrderReturns\OrderReturnResource;

class ViewOrderReturn extends ViewRecord
{
    protected static string $resource = OrderReturnResource::class;
}
