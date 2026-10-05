<?php

declare(strict_types=1);

namespace Reyhan\Core\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Reyhan\Core\Enums\Concerns\HasEnumHelpers;

enum TicketStatus: string implements HasColor, HasLabel
{
    use HasEnumHelpers;

    case Open = 'open';
    case Answered = 'answered';
    case AwaitingReply = 'awaiting_reply';
    case Closed = 'closed';

    public function getLabel(): string
    {
        return __('enums.ticket_status.'.$this->value);
    }

    public function getColor(): string
    {
        return match ($this) {
            self::Open => 'warning',
            self::Answered => 'success',
            self::AwaitingReply => 'info',
            self::Closed => 'gray',
        };
    }

    public function color(): string
    {
        return $this->getColor();
    }
}
