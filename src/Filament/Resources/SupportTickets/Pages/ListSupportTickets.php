<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\SupportTickets\Pages;

use Filament\Resources\Pages\ListRecords;
use Reyhan\Core\Filament\Resources\SupportTickets\SupportTicketResource;

class ListSupportTickets extends ListRecords
{
    protected static string $resource = SupportTicketResource::class;
}
