<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\Brands\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Reyhan\Core\Filament\Resources\Brands\BrandResource;

class EditBrand extends EditRecord
{
    protected static string $resource = BrandResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
