<?php

namespace App\Providers;

use App;
use App\Exceptions\ExceptionLogger;
use GeoIp2\Exception\GeoIp2Exception;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use GeoIp2\WebService\Client;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        config('app.locales');
        $currentDomain = self::getCurrentDomain();

        View::share('domain', $currentDomain);


        // Get user country
//            $country = self::getUserCountry();
        $country = 'Mozambique';

        // Get all active countries
        $activeCountries = get_active_countries();

        if (in_array($country, $activeCountries)) {
            // User have access to the website
            // TODO: IP detection
            self::setSiteLocale($country, $currentDomain);

        } else {
            // TODO: inaccessibility handler
            // User don't have access to the website
        }
    }

    private static function getUserCountry(): string
    {
        // Get user IP
        $ip = Request::ip();

        // Set default country
        $country = 'United Kingdom';

        try {
            // Create MindMax GoeIP client.
            $client = new Client(get_site_config('geoip_account_id'), get_site_config('geoip_licence_key'));

            // Get visitors Geo info based on his IP
            $record = $client->city($ip);
            $country = $record->country->name;
        } catch (GeoIp2Exception $exception) {
            throw new ExceptionLogger($exception);
        }

        return $country;
    }

    private static function getCurrentDomain(): string
    {
        $globalDomain = get_site_config('domain_global', 'tmgm.com');
        $auDomain = get_site_config('domain_au', 'tmgm.com.au');

        $currentHost = Request::getHttpHost();

        if (str_ends_with($currentHost, $globalDomain)) {
            return 'global';
        } else if (str_ends_with($currentHost, $auDomain)) {
            return 'au';
        }
        return 'global';
    }

    private static function setSiteLocale($country, $domain)
    {
        $preferLocale = Cookie::get('lang') ? Cookie::get('lang') : false;

        $enabledLocales = get_locales($domain);

        if ($preferLocale) {
            // User has set a prefer language, check if it is a valid language in current domain.

            if (in_array($preferLocale, $enabledLocales)) {
                // Valid locale, set locale.

                App::setLocale($preferLocale);
            } else {
                // Invalid locale, use default language.

                $defaultLocale = App\Traits\LocaleTrait::getLocaleByCountry($country);
                App::setLocale($defaultLocale['language']);
                App::setFallbackLocale($defaultLocale['fallback']);
            }
        } else {
            // User didn't set a prefer language, use default language.

            $defaultLocale = App\Traits\LocaleTrait::getLocaleByCountry($country);
            App::setLocale($defaultLocale['language']);
            App::setFallbackLocale($defaultLocale['fallback']);
        }
    }
}
