<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\BlogPosts\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Reyhan\Core\Filament\Resources\BlogPosts\BlogPostResource;

class ListBlogPosts extends ListRecords
{
    protected static string $resource = BlogPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
