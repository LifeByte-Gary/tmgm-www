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
     * Get locales enabled in the Global domain.
     *
     * @return array
     */
    public static function getGlobalLocales(): array
    {
        $locales = [];

        foreach (static::getLocaleSettings() as $localeSetting) {
            if (!in_array($localeSetting['language'], $locales)) {
                $locales[] = $localeSetting['language'];
            }
            if (!in_array($localeSetting['fallback_language'], $locales)) {
                $locales[] = $localeSetting['fallback_language'];
            }
        }

        return $locales;
    }

    /**
     * Get locales enabled in the Australian domain.
     *
     * @return array
     */
    public static function getAuLocales(): array
    {
        $locales = [];

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

        return $locales;
    }
}
