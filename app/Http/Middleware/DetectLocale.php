<?php

namespace App\Http\Middleware;

use App;
use App\Traits\LocaleTrait;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Session;

class DetectLocale
{
    /**
     * Detect and set app locale.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {

        // Get user prefer locale stored in session.
        $preferLocale = Session::get('locale', 'en');

        // Get locale from the url.
        $requestLocale = $request->route('locale', $preferLocale);

        // Get all active locales.
        $activeLocales = LocaleTrait::getActiveLocalesByDomain(detect_site_domain());


        if ($preferLocale !== $requestLocale) {

            // The locale requested in the url is not the prefer locale, change app locale to $requestLocale.
            self::setLocale($requestLocale, $activeLocales);
        } else {
            self::setLocale($preferLocale, $activeLocales);
        }

        return $next($request);
    }

    /**
     * Set given locale as app locale if it is active.
     *
     * @param $locale :Given locale.
     * @param $activeLocales :The list of active locales in current doamin.
     */
    private function setLocale($locale, $activeLocales)
    {
        if (isset($activeLocales[$locale])) {

            // Valid locale, set locale and store in session.
            App::setLocale($activeLocales[$locale]);
            Session::put('locale', $locale);
        } else {

            // Invalid locale, return 404 error page.
            abort(404);
        }
    }
}
