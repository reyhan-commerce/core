<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\OrderReturns\Pages;

use Filament\Resources\Pages\ListRecords;
use Reyhan\Core\Filament\Resources\OrderReturns\OrderReturnResource;

class ListOrderReturns extends ListRecords
{
    protected static string $resource = OrderReturnResource::class;
}
