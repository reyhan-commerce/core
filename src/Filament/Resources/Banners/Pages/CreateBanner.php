<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\Banners\Pages;

use Filament\Resources\Pages\CreateRecord;
use Reyhan\Core\Filament\Resources\Banners\BannerResource;

class CreateBanner extends CreateRecord
{
    protected static string $resource = BannerResource::class;
}
