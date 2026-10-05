<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\Faqs\Pages;

use Filament\Resources\Pages\CreateRecord;
use Reyhan\Core\Filament\Resources\Faqs\FaqResource;

class CreateFaq extends CreateRecord
{
    protected static string $resource = FaqResource::class;
}
