<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\Referrals\Pages;

use Filament\Resources\Pages\ListRecords;
use Reyhan\Core\Filament\Resources\Referrals\ReferralResource;

class ListReferrals extends ListRecords
{
    protected static string $resource = ReferralResource::class;
}
