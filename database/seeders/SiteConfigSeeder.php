<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear site_configs table.
        DB::table('site_configs')->delete();

        // Insert configs
        $siteConfigs = array(
            0 => array(
                'key' => 'site_name_global',
                'value' => 'TMGM - Best Forex Broker - Online CFD Trading Platform',
                'type' => 'string',
                'comment' => 'Global site name'
            ),
            1 => array(
                'key' => 'site_name_au',
                'value' => 'TMGM - Best Forex Broker - Online CFD Trading Platform',
                'type' => 'string',
                'comment' => 'Australia site name'
            ),
            2 => array(
                'key' => 'domain_global',
                'value' => 'www.tmgm.com',
                'type' => 'string',
                'comment' => 'Global site domain'
            ),
            3 => array(
                'key' => 'domain_au',
                'value' => 'www.tmgm.com.au',
                'type' => 'string',
                'comment' => 'Australia site name'
            ),
            4 => array(
                'key' => 'geoip_account_id',
                'value' => '141994',
                'type' => 'int',
                'comment' => 'MindMax GeoIP2 account ID'
            ),
            5 => array(
                'key' => 'geoip_licence_key',
                'value' => '2ap-qQ4eMgGCQ9!',
                'type' => 'string',
                'comment' => 'MindMax GeoIP2 licence key'
            ),
        );

        DB::table('site_configs')->insert($siteConfigs);
    }
}
