<?php


namespace App\Traits;


use Illuminate\Support\Facades\Request;
use Session;

trait DomainDetectable
{
    public static function detectDomain($domain = 'global'): string
    {
        // Get domain in session.
        $sessionDomain = Session::get('domain', null);

        if ($sessionDomain && in_array($sessionDomain, ['global', 'au'])) {

            // The domain info in session is valid, use it.
            $domain = $sessionDomain;
        } else {

            // The domain info in session does not exist or is invalid, detect domain from Http host name, and then
            // set the session.
            $globalDomain = SiteConfigTrait::getSiteConfigByKey('domain_global', 'tmgm.com');
            $auDomain = SiteConfigTrait::getSiteConfigByKey('domain_au', 'tmgm.com.au');

            $currentHost = Request::getHttpHost();

            if (str_ends_with($currentHost, $globalDomain)) {
                $domain = 'global';
                Session::put('domain', 'global');
            } else if (str_ends_with($currentHost, $auDomain)) {
                $domain = 'au';
                Session::put('domain', 'au');
            }
        }

        return $domain;
    }
}
