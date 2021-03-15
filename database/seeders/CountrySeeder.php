<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear site_configs table.
        DB::table('countries')->delete();

        $locales = array(
            0 => array(
                'continent' => 'Asia Pacific',
                'country' => 'Australia',
                'redirection_type' => 0,
                'accessibility' => 1,
                'locale_id' => 1,
                'fallback_id' => 1,
            ),
            1 => array(
                'continent' => 'Africa and Middle East',
                'country' => 'Mozambique',
                'redirection_type' => 0,
                'accessibility' => 1,
                'locale_id' => 3,
                'fallback_id' => 1,
            ),
            2 => array(
                'continent' => 'Europe',
                'country' => 'Spain',
                'redirection_type' => 0,
                'accessibility' => 0,
                'locale_id' => 4,
                'fallback_id' => 1,
            ),
            3 => array(
                'continent' => 'Unknown',
                'country' => 'Unknown',
                'redirection_type' => 0,
                'accessibility' => 0,
                'locale_id' => 1,
                'fallback_id' => 1,
            ),

        );

        DB::table('countries')->insert($locales);
    }
}
