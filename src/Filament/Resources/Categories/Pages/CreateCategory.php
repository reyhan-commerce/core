<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\Categories\Pages;

use Filament\Resources\Pages\CreateRecord;
use Reyhan\Core\Filament\Resources\Categories\CategoryResource;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
}
