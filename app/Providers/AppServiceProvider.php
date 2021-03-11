<?php

namespace App\Providers;

use App\Traits\LocaleTrait;
use GeoIp2\Exception\GeoIp2Exception;
use Illuminate\Support\Facades\App;
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
        // TODO: IP detection
        View::share('domain', 'global');

        // TODO: Language detection
        // Check for 'lang' cookie
        $cookie = Cookie::get('lang') ? Crypt::decrypt(Cookie::get('lang')) : false;

        if (!$cookie) {
            // User didn't choose a prefer language, set a default country-based language.

            // Get user country
            $country = self::detectCountry();
            dd($country);

        }


    }

    private static function detectCountry(): string
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
        } catch (GeoIp2Exception $ex) {
        }

        return $country;
    }
}
