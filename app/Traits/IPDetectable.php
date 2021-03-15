<?php


namespace App\Traits;


use GeoIp2\Exception\GeoIp2Exception;
use GeoIp2\WebService\Client;
use Request;
use Session;

trait IPDetectable
{
    /**
     * Detect client country according to client's IP.
     * If the IP is valid and country can be detected successfully, store the country in session.
     * If the detection fails, a GeoIp2Exception exception will be thrown, record this exception into the database.
     *
     * @param $request
     * @param string $country
     * @return string|null
     */
    public static function getUserCountry($request, $country = 'Unknown'): ?string
    {
        $ip = Request::ip();

        try {

            // Create MindMax GoeIP client.
            $client = new Client(SiteConfigTrait::getSiteConfigByKey('geoip_account_id'), SiteConfigTrait::getSiteConfigByKey('geoip_licence_key'));

            // Get visitors Geo info based on his IP
            $record = $client->city($ip);
            $country = $record->country->name;
            Session::put('country', $country);
        } catch (GeoIp2Exception $exception) {

            // Record exception in the database table "exception_log".
            ExceptionLogTrait::logException($exception, $request);
        }

        return $country;
    }

}
