<?php

namespace App\Traits;

use App\Models\Locale;
use Illuminate\Support\Facades\Cache;
use JetBrains\PhpStorm\ArrayShape;

trait LocaleTrait
{
    /**
     * Get locales data and cache it.
     *
     * @return mixed
     */
    public static function getAllLocaleSettings(): mixed
    {
        return Cache::rememberForever('locales', function () {
            $result = [];

            $locales = Locale::all();

            foreach ($locales as $locale) {
                $result[$locale->url] = [
                    'id' => $locale->id,
                    'url' => $locale->url,
                    'code' => $locale->code,
                    'flag' => $locale->flag,
                    'description' => $locale->description,
                    'active_in_au' => $locale->active_in_au,
                    'active_in_global' => $locale->active_in_global
                ];
            }

            return $result;
        });
    }

    /**
     * Get all active locales by domain.
     *
     * @param $domain :Domain can be 'global' or 'au'.
     * @return array
     */
    public static function getActiveLocalesByDomain($domain): array
    {
        $locales = [];

        switch ($domain) {
            case 'global':
            {
                foreach (static::getAllLocaleSettings() as $localeSetting) {
                    if ($localeSetting['active_in_global']) {
                        $locales[$localeSetting['url']] = $localeSetting;
                    }
                }
                break;
            }

            case 'au':
            {
                foreach (static::getAllLocaleSettings() as $localeSetting) {
                    if ($localeSetting['active_in_au']) {
                        $locales[$localeSetting['url']] = $localeSetting;
                    }
                }
                break;
            }
        }

        return $locales;
    }

    /**
     * Get locale setting by given locale code.
     *
     * @param string $domain
     * @param string $code
     * @return array
     */
    public static function getLocaleSettingByCode($domain = 'au', $code = 'en'): array
    {
        foreach (static::getActiveLocalesByDomain($domain) as $localeSetting) {
            if ($localeSetting['code'] === $code) {
                return $localeSetting;
            }
        }

        return static::getAllLocaleSettings()[$code];
    }
}
