<?php

declare(strict_types=1);

namespace Reyhan\Core\Events\Auth;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Reyhan\Core\Models\User;

final class CustomerRegistered
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public User $user,
    ) {}
}
