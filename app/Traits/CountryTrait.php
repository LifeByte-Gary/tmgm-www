<?php


namespace App\Traits;


use App\Models\Country;
use Illuminate\Support\Facades\Cache;

trait CountryTrait
{
    public static function getAllCountrySettings()
    {
        return Cache::rememberForever('countries', function () {
            $result = [];

            $countries = Country::all();

            foreach ($countries as $country) {
                $result[$country->coutnry] = array(
                    'continent' => $country->continent,
                    'country' => $country->country,
                    'redirectionType' => $country->redirection_type,
                    'accessibility' => $country->accessibility,
                );
            }

            return $result;
        });
    }
}
