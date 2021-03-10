<?php

namespace App\Providers;

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
        //Check for 'lang' cookie
        $cookie = Cookie::get('lang') ? Crypt::decrypt(Cookie::get('lang')) : false;

        // Get user IP
        $ip = Request::ip();

        //Get visitors Geo info based on his IP
//        $geo = GeoIP
    }
}
