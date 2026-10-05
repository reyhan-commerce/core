<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\Reviews\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Reyhan\Core\Filament\Resources\Reviews\ReviewResource;

class ViewReview extends ViewRecord
{
    protected static string $resource = ReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
