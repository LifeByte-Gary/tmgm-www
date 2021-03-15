<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperCountry
 */
class Country extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function locale(): BelongsTo
    {
        return $this->belongsTo(Locale::class);
    }

    public function fallback(): BelongsTo
    {
        return $this->belongsTo(Locale::class, 'fallback_id');
    }
}
