<?php

// Get locales enabled on the Global domain.
use App\Traits\LocaleTrait;
use App\Traits\SiteConfigTrait;

if (!function_exists('get_global_locales')) {
    /**
     * Get locales enabled on the Global domain.
     *
     * @return array
     */
    function get_global_locales(): array
    {
        return LocaleTrait::getGlobalLocales();
    }
}

if (!function_exists('get_au_locales')) {
    /**
     * Get locales enabled on the Australian domain.
     *
     * @return array
     */
    function get_au_locales(): array
    {
        return LocaleTrait::getAuLocales();
    }
}

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
