<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\ProductQuestions\Pages;

use Filament\Resources\Pages\ListRecords;
use Reyhan\Core\Filament\Resources\ProductQuestions\ProductQuestionResource;

class ListProductQuestions extends ListRecords
{
    protected static string $resource = ProductQuestionResource::class;
}
