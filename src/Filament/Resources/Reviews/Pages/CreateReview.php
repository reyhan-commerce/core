<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\Reviews\Pages;

use Filament\Resources\Pages\CreateRecord;
use Reyhan\Core\Filament\Resources\Reviews\ReviewResource;

class CreateReview extends CreateRecord
{
    protected static string $resource = ReviewResource::class;
}
