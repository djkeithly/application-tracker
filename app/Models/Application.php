<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Application extends Model
{
    protected $fillable = [
        'company',
        'status',
        'details',
        'position',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
