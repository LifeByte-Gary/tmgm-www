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

if (!function_exists('get_page_content')) {
    function get_page_content($pageId, $component, $default = null)
    {
        $content = PageContentTrait::getPageContent($pageId, $component);

        if ($content) {
            return $content['value'];
        } else {
            return $default;
        }
    }
}
