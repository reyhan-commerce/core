<?php

declare(strict_types=1);

namespace Reyhan\Core\Events\Inventory;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Reyhan\Core\Models\ProductVariant;

final class StockDepleted
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public ProductVariant $variant,
    ) {}
}
