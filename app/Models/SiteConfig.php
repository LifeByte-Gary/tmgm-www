<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperSiteConfig
 */
class SiteConfig extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['key', 'value', 'type', 'comment'];

    public $timestamps = false;
}
