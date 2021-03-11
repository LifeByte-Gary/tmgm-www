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
    public static function getLocaleSettings()
    {
        return Cache::rememberForever('locales', function () {
            $result = [];

            $locales = Locale::all();

            foreach ($locales as $locale) {
                $result[$locale->country] = [
                    'continent' => $locale->continent,
                    'country' => $locale->country,
                    'direction_type' => $locale->direction_type,
                    'language' => $locale->language,
                    'fallback_language' => $locale->fallback_language,
                    'accessibility' => $locale->accessibility,
                    'active_in_au' => $locale->active_in_au
                ];
            }

            return $result;
        });
    }

    /**
     * Get all enabled locales by domain.
     *
     * @param $domain :Domain can be 'global' or 'au'.
     * @return array
     */
    public static function getLocalesByDomain($domain): array
    {
        $locales = [];

        switch ($domain) {
            case 'global':
            {
                foreach (static::getLocaleSettings() as $localeSetting) {
                    if (!in_array($localeSetting['language'], $locales)) {
                        $locales[] = $localeSetting['language'];
                    }
                    if (!in_array($localeSetting['fallback_language'], $locales)) {
                        $locales[] = $localeSetting['fallback_language'];
                    }
                }
                break;
            }

            case 'au':
            {
                foreach (static::getLocaleSettings() as $localeSetting) {
                    if ($localeSetting['active_in_au']) {
                        if (!in_array($localeSetting['language'], $locales)) {
                            $locales[] = $localeSetting['language'];
                        }
                        if (!in_array($localeSetting['fallback_language'], $locales)) {
                            $locales[] = $localeSetting['fallback_language'];
                        }
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
