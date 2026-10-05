<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\BlogCategories\Pages;

use Filament\Resources\Pages\CreateRecord;
use Reyhan\Core\Filament\Resources\BlogCategories\BlogCategoryResource;

class CreateBlogCategory extends CreateRecord
{
    protected static string $resource = BlogCategoryResource::class;
}
