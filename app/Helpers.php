<?php

// Get locales enabled on the Global domain.
use App\Traits\LocaleTrait;

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
