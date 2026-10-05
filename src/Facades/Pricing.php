<?php

declare(strict_types=1);

namespace Reyhan\Core\Facades;

use Illuminate\Support\Facades\Facade;
use Reyhan\Core\Data\Pricing\CartPricingData;
use Reyhan\Core\Models\Cart;
use Reyhan\Core\Models\City;
use Reyhan\Core\Models\ShippingMethod;
use Reyhan\Core\Services\Pricing\PricingService;

/**
 * @method static CartPricingData calculateCart(Cart $cart, ?City $destinationCity = null, ShippingMethod|\Reyhan\Core\Enums\ShippingMethod|int|string|null $shippingMethod = null)
 * @method static \Reyhan\Core\Pipelines\Cart\CartCalculationPipeline pipeline()
 * @method static void prependPipe(string $pipe)
 * @method static void appendPipe(string $pipe)
 *
 * @see PricingService
 */
final class Pricing extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return PricingService::class;
    }
}
