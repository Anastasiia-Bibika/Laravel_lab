<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'title',
        "price",
        "data_make",
        "maker_id",
    ];

    use HasFactory;
    public function maker(): BelongsTo
    {
        return $this->belongsTo(Maker::class);
    }

}
