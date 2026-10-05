<?php

declare(strict_types=1);

namespace Reyhan\Core\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Reyhan\Core\Enums\Concerns\HasEnumHelpers;

enum ReviewStatus: string implements HasColor, HasLabel
{
    use HasEnumHelpers;

    case Pending = 'pending';
    case Approved = 'approved';
    case Rejected = 'rejected';

    public function getLabel(): string
    {
        return __('enums.review_status.'.$this->value);
    }

    public function getColor(): string
    {
        return match ($this) {
            self::Pending => 'warning',
            self::Approved => 'success',
            self::Rejected => 'danger',
        };
    }

    public function color(): string
    {
        return $this->getColor();
    }
}
