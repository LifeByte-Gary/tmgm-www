<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperLocale
 */
class Locale extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [];

    public $timestamps = false;
}
