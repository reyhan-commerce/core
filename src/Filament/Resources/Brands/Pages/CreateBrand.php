<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\Brands\Pages;

use Filament\Resources\Pages\CreateRecord;
use Reyhan\Core\Filament\Resources\Brands\BrandResource;

class CreateBrand extends CreateRecord
{
    protected static string $resource = BrandResource::class;
}
