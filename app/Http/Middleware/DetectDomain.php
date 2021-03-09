<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DetectDomain
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->getHost() === 'tmgm.test') {
            $request->attributes->set('domain', 'global');
        }

        return $next($request);
    }
}
