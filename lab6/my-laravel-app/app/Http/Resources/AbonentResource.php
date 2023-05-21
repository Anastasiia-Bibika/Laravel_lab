<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AbonentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'number' => $this->$this->whenNotNull($this->number),
            'home_adress' => $this->whenNotNull($this->home_adress),
            'owner' => $this->$this->whenNotNull($this->owner),
            'status_score' => $this->$this->whenNotNull($this->status_score),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'creator_user_id' => $this->creator_user_id,
        ];
    }
}
