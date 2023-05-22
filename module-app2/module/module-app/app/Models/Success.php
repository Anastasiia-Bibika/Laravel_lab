<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Success extends Model
{
    use HasFactory;
    protected $fillable = [
        'object',
        'marks',
        'data_marks',
    ];
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

}
