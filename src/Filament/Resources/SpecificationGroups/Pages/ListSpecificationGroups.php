<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\SpecificationGroups\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Reyhan\Core\Filament\Resources\SpecificationGroups\SpecificationGroupResource;

class ListSpecificationGroups extends ListRecords
{
    protected static string $resource = SpecificationGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
