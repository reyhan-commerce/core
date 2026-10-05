<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\Faqs\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Reyhan\Core\Filament\Resources\Faqs\FaqResource;

class EditFaq extends EditRecord
{
    protected static string $resource = FaqResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
