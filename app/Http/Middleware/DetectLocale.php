<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;

class DetectLocale
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $preferLocale = Cookie::get('lang') ? Cookie::get('lang') : false;
        $requestLocale = $request->segment(1);

        if (!$preferLocale || $preferLocale !== $requestLocale) {
            dd($requestLocale);
            App::setLocale($requestLocale);
        }

        return $next($request);
    }
}
