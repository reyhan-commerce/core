<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\ContactMessages\Pages;

use Filament\Resources\Pages\ListRecords;
use Reyhan\Core\Filament\Resources\ContactMessages\ContactMessageResource;

class ListContactMessages extends ListRecords
{
    protected static string $resource = ContactMessageResource::class;
}
