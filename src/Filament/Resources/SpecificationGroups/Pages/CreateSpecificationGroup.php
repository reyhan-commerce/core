<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\SpecificationGroups\Pages;

use Filament\Resources\Pages\CreateRecord;
use Reyhan\Core\Filament\Resources\SpecificationGroups\SpecificationGroupResource;

class CreateSpecificationGroup extends CreateRecord
{
    protected static string $resource = SpecificationGroupResource::class;
}
