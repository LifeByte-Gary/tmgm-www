<?php

use App\Traits\LocaleTrait;
use App\Traits\SiteConfigTrait;

if (!function_exists('get_site_config')) {
    /**
     * Get site config according to given key.
     *
     * @param $key
     * @param null $default
     * @return mixed|null
     */
    function get_site_config($key, $default = null)
    {
        return SiteConfigTrait::getSiteConfigByKey($key, $default);
    }
}

if (!function_exists('get_locales')) {
    /**
     * Get enabled locales according to domain.
     *
     * @param $domain
     * @return array
     */
    function get_locales($domain): array
    {
        return LocaleTrait::getLocalesByDomain($domain);
    }
}

if (!function_exists('get_active_countries')) {
    /**
     * Get all countries that have access to the website (both Global, Australia and Greater Land).
     *
     * @return array
     */
    function get_active_countries(): array
    {
        return LocaleTrait::getActiveCountries();
    }
}
