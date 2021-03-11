<?php


namespace App\Traits;


use App\Models\SiteConfig;
use Illuminate\Support\Facades\Cache;

trait SiteConfigTrait
{
    public static function getAllSiteConfigs()
    {
        return Cache::rememberForever('siteConfigs', function () {
            $result = [];

            $configs = SiteConfig::all();

            foreach ($configs as $config) {
                switch ($config->type) {
                    case 'boolean':
                    {
                        switch (strtolower($config->value)) {
                            case 'false':
                                $result[$config->key] = false;
                                break;
                            case 'true':
                                $result[$config->key] = true;
                                break;
                            default:
                                break;
                        }
                        break;
                    }
                    case 'int':
                    {
                        $result[$config->key] = intval($config->value);
                        break;
                    }
                    default:
                        $result[$config->key] = $config->value;
                        break;
                }
            }

            return $result;
        });
    }

    public static function getSiteConfigByKey($key, $default=null)
    {
        $configs = self::getAllSiteConfigs();

        return isset($configs[$key]) && !is_null($configs[$key])
            ? $configs[$key]
            : $default;
    }
}
