<?php

use App\Traits\LocaleTrait;
use App\Traits\SiteConfigTrait;
use Illuminate\Support\Facades\Request;

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

if (!function_exists('detect_site_domain')) {
    /**
     * Detect the site domain that user is visiting: Global or Australian
     *
     * @return string
     */
    function detect_site_domain(): string
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
}
