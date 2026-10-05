<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\Attributes\Pages;

use Filament\Resources\Pages\CreateRecord;
use Reyhan\Core\Filament\Resources\Attributes\AttributeResource;

class CreateAttribute extends CreateRecord
{
    protected static string $resource = AttributeResource::class;
}
