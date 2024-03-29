<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SuccessResource extends JsonResource
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
            'object' => $this->whenNotNull($this->object),
            'marks' => $this->whenNotNull($this->marks),
            'data_marks' => $this->$this->whenNotNull($this->data_marks),
            'student_id' => $this->$this->whenNotNull($this->student_id),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'creator_user_id' => $this->creator_user_id,
        ];
    }
}
