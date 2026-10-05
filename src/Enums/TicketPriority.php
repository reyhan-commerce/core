<?php

declare(strict_types=1);

namespace Reyhan\Core\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Reyhan\Core\Enums\Concerns\HasEnumHelpers;

enum TicketPriority: string implements HasColor, HasLabel
{
    use HasEnumHelpers;

    case Low = 'low';
    case Medium = 'medium';
    case High = 'high';
    case Urgent = 'urgent';

    public function getLabel(): string
    {
        return __('enums.ticket_priority.'.$this->value);
    }

    public function getColor(): string
    {
        return match ($this) {
            self::Low => 'gray',
            self::Medium => 'info',
            self::High => 'warning',
            self::Urgent => 'danger',
        };
    }

    public function color(): string
    {
        return $this->getColor();
    }
}
