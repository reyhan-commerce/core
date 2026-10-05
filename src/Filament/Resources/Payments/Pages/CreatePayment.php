<?php

declare(strict_types=1);

namespace Reyhan\Core\Filament\Resources\Payments\Pages;

use Filament\Resources\Pages\CreateRecord;
use Reyhan\Core\Filament\Resources\Payments\PaymentResource;

class CreatePayment extends CreateRecord
{
    protected static string $resource = PaymentResource::class;
}
