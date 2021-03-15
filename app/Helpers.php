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
