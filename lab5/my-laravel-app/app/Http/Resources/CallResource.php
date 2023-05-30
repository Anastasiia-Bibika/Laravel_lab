<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CallResource extends JsonResource
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
            'number_call' => $this->whenNotNull($this->number_call),
            'duration' => $this->whenNotNull($this->duration),
            'pay' => $this->$this->whenNotNull($this->pay),
            'abonent_id' => $this->$this->whenNotNull($this->abonent_id),
            'implementation_time' => $this->$this->whenNotNull($this->implementation_time),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'creator_user_id' => $this->creator_user_id,
        ];
    }
}
