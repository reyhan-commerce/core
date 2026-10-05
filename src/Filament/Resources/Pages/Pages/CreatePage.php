<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\Pages\Pages;

use Filament\Resources\Pages\CreateRecord;
use Reyhan\Core\Filament\Resources\Pages\PageResource;

class CreatePage extends CreateRecord
{
    protected static string $resource = PageResource::class;
}
