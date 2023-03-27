<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Maker extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand',
        'country',
        'number',
        'email',
    ];
    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
