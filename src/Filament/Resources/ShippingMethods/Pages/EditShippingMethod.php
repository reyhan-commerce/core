<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\ShippingMethods\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Reyhan\Core\Filament\Resources\ShippingMethods\ShippingMethodResource;

class EditShippingMethod extends EditRecord
{
    protected static string $resource = ShippingMethodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
