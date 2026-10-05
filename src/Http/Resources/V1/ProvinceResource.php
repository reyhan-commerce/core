<?php

declare(strict_types=1);

namespace Reyhan\Core\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Reyhan\Core\Models\Province;

/**
 * @mixin Province
 */
class ProvinceResource extends JsonResource
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
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'cities' => CityResource::collection($this->whenLoaded('cities')),
        ];
    }
}
