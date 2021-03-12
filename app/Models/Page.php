<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperPage
 */
class Page extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'tag',
        'url',
        'view_path',
        'locale',
        'for_global',
        'for_au'
    ];
}
