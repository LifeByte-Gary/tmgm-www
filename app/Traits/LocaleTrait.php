<?php

namespace App\Traits;

use App\Models\Locale;
use Illuminate\Support\Facades\Cache;

trait LocaleTrait
{
    /**
     * Get locales data and cache it.
     *
     * @return mixed
     */
    public static function getLocaleSettings(): mixed
    {
        return Cache::rememberForever('locales', function () {
            $result = [];

            $locales = Locale::all();

            foreach ($locales as $locale) {
                $result[$locale->url] = [
                    'url' => $locale->url,
                    'code' => $locale->code,
                    'flag' => $locale->flag,
                    'description' => $locale->description,
                    'active_in_au' => $locale->active_in_au
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
                foreach (static::getLocaleSettings() as $localeSetting) {
                    if ($localeSetting['active_in_global']) {
                        $locales[$localeSetting['url']] = $localeSetting['code'];
                    }
                }
                break;
            }

            case 'au':
            {
                foreach (static::getLocaleSettings() as $localeSetting) {
                    if ($localeSetting['active_in_au']) {
                        $locales[$localeSetting['url']] = $localeSetting['code'];
                    }
                }
                break;
            }
        }

        return $locales;
    }

    /**
     * Get locale setting according to given country.
     *
     * @param $country
     * @return string[]
     */
    public static function getLocaleByCountry($country): array
    {
        $result = array(
            'language' => 'en',
            'fallback' => 'en'
        );

        if(isset(self::getLocaleSettings()[$country]) && !is_null(self::getLocaleSettings()[$country])) {
            $data = self::getLocaleSettings()[$country];
            $result['language'] = $data['language'];
            $result['fallback'] = $data['fallback_language'];
        }

        return $result;
    }

    /**
     * Get all countries that have access to the website (both Global, Australia and Greater Land).
     *
     * @return array
     */
    public static function getActiveCountries(): array
    {
        $countries = [];

        foreach (static::getLocaleSettings() as $localeSetting) {
            if ($localeSetting['accessibility']) {
                $countries[] = $localeSetting['country'];
            }
        }

        return $countries;
    }
}
