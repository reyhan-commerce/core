<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\BlogCategories\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Reyhan\Core\Filament\Resources\BlogCategories\BlogCategoryResource;

class ListBlogCategories extends ListRecords
{
    protected static string $resource = BlogCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
