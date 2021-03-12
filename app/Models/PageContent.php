<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperPageContent
 */
class PageContent extends Model
{
    use HasFactory;

    protected $table = 'page_content';

    protected $guarded = [];

    protected $fillable = [
        'page_id',
        'component',
        'type',
        'value'
    ];
}
