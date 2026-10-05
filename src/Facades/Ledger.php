<?php

declare(strict_types=1);

namespace Reyhan\Core\Facades;

use Illuminate\Support\Facades\Facade;
use Reyhan\Core\Models\LedgerTransaction;
use Reyhan\Core\Models\Order;
use Reyhan\Core\Models\Payment;
use Reyhan\Core\Services\Accounting\LedgerService;

/**
 * @method static LedgerTransaction recordOrderSettlement(Order $order, Payment $payment)
 * @method static int getAccountBalance(string $code)
 *
 * @see LedgerService
 */
final class Ledger extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return LedgerService::class;
    }
}
