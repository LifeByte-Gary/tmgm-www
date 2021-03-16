<?php

use App\Traits\LocaleTrait;
use App\Traits\PageContentTrait;
use App\Traits\SiteConfigTrait;
use Illuminate\Support\Facades\Request;

if (!function_exists('get_site_config')) {
    /**
     * Get site config according to given key.
     *
     * @param $key
     * @param null $default
     * @return mixed
     */
    function get_site_config($key, $default = null): mixed
    {
        return SiteConfigTrait::getSiteConfigByKey($key, $default);
    }
}

if (!function_exists('get_active_locales')) {
    /**
     * Get active locales in given domain.
     *
     * @param string $domain :Can be 'global' or 'au', default is 'au' as 'global' domain covers all locales that 'au'
     * domain does.
     * @return array
     */
    function get_active_locales($domain = 'au'): array
    {
        return LocaleTrait::getActiveLocalesByDomain($domain);
    }
}

if (!function_exists('get_current_locale')) {
    /**
     * Get current locale.
     *
     * @param string $domain
     * @return array|string
     */
    function get_current_locale($domain = 'au'): array|string
    {
        $currentLocale = App::currentLocale();
        return LocaleTrait::getLocaleSettingByCode($domain, $currentLocale);
    }
}
