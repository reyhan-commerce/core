<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\SpecificationGroups\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Reyhan\Core\Filament\Resources\SpecificationGroups\SpecificationGroupResource;

class EditSpecificationGroup extends EditRecord
{
    protected static string $resource = SpecificationGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
