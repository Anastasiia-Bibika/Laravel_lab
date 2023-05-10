<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Call extends Model
{
    protected $fillable = [
        'number_call',
        "duration",
        "pay",
        "abonent_id",
        "implementation_time",
        "creator_user_id",
    ];

    use HasFactory;
      public function abonent(): BelongsTo
      {
          return $this->belongsTo(Abonent::class);
      }
}
