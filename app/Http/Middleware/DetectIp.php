<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DetectIp
{
    /**
     * Detect user IP.
     * Redirect or show a pop up according to user country.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
