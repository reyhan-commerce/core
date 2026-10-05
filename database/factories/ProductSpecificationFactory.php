<?php

declare(strict_types=1);

namespace Reyhan\Core\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Reyhan\Core\Models\Product;
use Reyhan\Core\Models\ProductSpecification;
use Reyhan\Core\Models\Specification;

/**
 * @extends Factory<ProductSpecification>
 */
class ProductSpecificationFactory extends Factory
{
    protected $model = ProductSpecification::class;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'specification_id' => Specification::factory(),
            'value' => fake()->word(),
        ];
    }
}
