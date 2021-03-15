<?php

namespace App\Http\Middleware;

use App;
use App\Traits\CountryTrait;
use App\Traits\DomainDetectable;
use App\Traits\IPDetectable;
use App\Traits\LocaleTrait;
use Closure;
use Illuminate\Http\Request;
use Session;

class DetectLocale
{
    /**
     * Detect the client locale and set the app locale. There are following conditions:
     * 1. If there is a valid locale in the request route, set the app locale to it and update client prefer locale;
     * 2. If there is an invalid locale in the request route, render "Page not found" page;
     * 3. If the request route doesn't contain the locale, and client has set a valid prefer locale, set the app locale
     * to it;
     * 4. If the request route doesn't contain the locale, and client has set an invalid prefer locale, detect the
     * default locale according to client country and set it as the prefer locale;
     * 5. If the request route doesn't contain the locale, and client doesn't set a prefer locale, detect the
     * default locale according to client country and set it as the prefer locale.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        // Get all active locales.
        $activeLocales = LocaleTrait::getActiveLocalesByDomain(DomainDetectable::detectDomain());

        // Get user prefer locale stored in session.
        $preferLocale = Session::get('locale') ? Session::get('locale') : self::getDefaultLocale($request, $activeLocales);

        // Get locale from the url.
        $requestLocale = $request->route('locale', $preferLocale);

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

    /**
     * Get default country-based locale according to client's IP.
     *
     * @param $request
     * @param $activeLocales
     * @param string $default
     * @return string
     */
    private function getDefaultLocale($request, $activeLocales, $default = 'en'): string
    {
        // Get client country.
        $clientCountry = Session::get('country') ? Session::get('country') : IPDetectable::getUserCountry($request);

        // Get locale and fallback locale according to client country.
        $locales = CountryTrait::getLocalesByCountry($clientCountry);

        // Set locale
        if ($locales) {
            if (isset($activeLocales[$locales['locale']])) {
                return $locales['locale'];
            } elseif (isset($activeLocales[$locales['fallback']])) {
                return $locales['fallback'];
            }
        }

        return $default;
    }
}
