<?php

declare(strict_types=1);

namespace Reyhan\Core\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Reyhan\Core\Models\Brand;

/**
 * @mixin Brand
 */
class BrandResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'name_en' => $this->name_en,
            'logo' => $this->getFirstMediaUrl('logo') ?: $this->logo,
            'description' => $this->description,
        ];
    }
}
