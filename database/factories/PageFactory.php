<?php

declare(strict_types=1);

namespace Reyhan\Core\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Reyhan\Core\Models\Page;

/**
 * @extends Factory<Page>
 */
class PageFactory extends Factory
{
    protected $model = Page::class;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->words(2, true);

        return [
            'title' => 'صفحه '.$title,
            'slug' => fake()->unique()->slug(),
            'content' => '<p>'.fake()->paragraphs(3, true).'</p>',
            'metadata' => null,
            'meta_title' => null,
            'meta_description' => null,
            'is_active' => true,
        ];
    }

    public function inactive(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_active' => false,
        ]);
    }
}
