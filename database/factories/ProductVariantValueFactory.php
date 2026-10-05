<?php

declare(strict_types=1);

namespace Reyhan\Core\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Reyhan\Core\Models\AttributeValue;
use Reyhan\Core\Models\ProductVariant;
use Reyhan\Core\Models\ProductVariantValue;

/**
 * @extends Factory<ProductVariantValue>
 */
class ProductVariantValueFactory extends Factory
{
    protected $model = ProductVariantValue::class;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_variant_id' => ProductVariant::factory(),
            'attribute_value_id' => AttributeValue::factory(),
        ];
    }
}
