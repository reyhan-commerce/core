<?php

declare(strict_types=1);

namespace Reyhan\Core\Events\Catalog;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Reyhan\Core\Models\ProductVariant;

final class ProductRestockedEvent
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public ProductVariant $variant,
        public int $oldStock,
        public int $newStock,
    ) {}
}
