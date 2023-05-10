<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Abonent extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'home_adress',
        'owner',
        'status_score',
        "creator_user_id",
    ];
    public function call(): HasMany
    {
        return $this->hasMany(Call::class);
    }
}
