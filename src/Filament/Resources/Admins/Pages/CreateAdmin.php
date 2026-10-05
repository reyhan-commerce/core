<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\Admins\Pages;

use Filament\Resources\Pages\CreateRecord;
use Reyhan\Core\Filament\Resources\Admins\AdminResource;

class CreateAdmin extends CreateRecord
{
    protected static string $resource = AdminResource::class;
}
