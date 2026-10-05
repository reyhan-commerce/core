<?php

declare(strict_types=1);

namespace Reyhan\Core\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Reyhan\Core\Models\AbandonedCartLog;
use Reyhan\Core\Models\Cart;
use Reyhan\Core\Models\User;

/**
 * @extends Factory<AbandonedCartLog>
 */
class AbandonedCartLogFactory extends Factory
{
    protected $model = AbandonedCartLog::class;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cart_id' => Cart::factory(),
            'user_id' => User::factory(),
            'notified_at' => now(),
            'coupon_id' => null,
            'status' => 'sent',
        ];
    }
}
