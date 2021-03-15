<?php

namespace App\Providers;

use App\Traits\DomainDetectable;
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
        View::share('domain', DomainDetectable::detectDomain());
    }
}
