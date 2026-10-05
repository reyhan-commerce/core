<?php

declare(strict_types=1);

namespace Reyhan\Core\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Reyhan\Core\Models\SpecificationGroup;

/**
 * @extends Factory<SpecificationGroup>
 */
class SpecificationGroupFactory extends Factory
{
    protected $model = SpecificationGroup::class;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(2, true),
            'order' => 1,
        ];
    }
}
