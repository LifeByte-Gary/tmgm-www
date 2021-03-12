<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Session;

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
        $currentLocale = App::currentLocale();

        // Get user prefer locale stored in session.
        $preferLocale = $request->session()->get('locale', false);

        // Get locale from the url.
        $requestLocale = $request->route('locale');

        // Get all active locales.
        $activeLocales = App\Traits\LocaleTrait::getActiveLocalesByDomain(detect_site_domain());


        if (!$preferLocale || $preferLocale !== $requestLocale) {

            $qq = App::currentLocale();
            // User did not set a prefer locale or the locale requested in the url is not the prefer locale.
            // Use request locale
            self::setLocale($requestLocale, $activeLocales);
        }

        $newLocale = App::currentLocale();
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
            // TODO: return 404 error page
            $thisLocale = App::currentLocale();
            abort(404);
        }
    }
}
