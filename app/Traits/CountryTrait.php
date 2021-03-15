<?php


namespace App\Traits;


use App\Models\Country;
use Illuminate\Support\Facades\Cache;

trait CountryTrait
{
    /**
     * Get all country settings from database table "countries" and cache these settings.
     *
     * @return mixed
     */
    public static function getAllCountrySettings(): mixed
    {
        return Cache::rememberForever('countries', function () {
            $result = [];

            $countries = Country::all();

            foreach ($countries as $country) {
                $result[$country->country] = [
                    'continent' => $country->continent,
                    'country' => $country->country,
                    'redirectionType' => $country->redirection_type,
                    'accessibility' => $country->accessibility,
                    'locale' => $country->locale->url,
                    'fallback' => $country->fallback->url,
                ];
            }

            return $result;
        });
    }

    /**
     * Get locale and fallback locale according given country.
     *
     * @param $country
     * @return array|null
     */
    public static function getLocalesByCountry($country): ?array
    {
        if (isset(self::getAllCountrySettings()[$country])) {
            $data = self::getAllCountrySettings()[$country];
            $result['locale'] = $data['locale'];
            $result['fallback'] = $data['fallback'];

            return $result;
        }

        return null;
    }


    /**
     * Get all countries that have access to the website (including Global, Australia and Greater Land).
     *
     * @return array
     */
    public static function getActiveCountries(): array
    {
        $countries = [];

        foreach (static::getAllCountrySettings() as $countrySetting) {
            if ($countrySetting['accessibility']) {
                $countries[] = $countrySetting['country'];
            }
        }

        return $countries;
    }
}
