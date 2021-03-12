<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperExceptionLog
 */
class ExceptionLog extends Model
{
    use HasFactory;

    protected $table = 'exception_log';

    protected $guarded = [];
}
