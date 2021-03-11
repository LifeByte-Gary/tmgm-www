<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocaleSeeder extends Seeder
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

        $locales = array(
            0 => array(
                'continent' => 'Asia Pacific',
                'country' => 'Australia',
                'direction_type' => 0,
                'language' => 'en',
                'fallback_language' => 'en',
                'accessibility' => 1,
                'active_in_au' => 1
            ),
            1 => array(
                'continent' => 'Africa and Middle East',
                'country' => 'Mozambique',
                'direction_type' => 0,
                'language' => 'pt',
                'fallback_language' => 'en',
                'accessibility' => 1,
                'active_in_au' => 0
            ),
            2 => array(
                'continent' => 'Europe',
                'country' => 'Spain',
                'direction_type' => 0,
                'language' => 'es',
                'fallback_language' => 'en',
                'accessibility' => 0,
                'active_in_au' => 0
            ),

        );

        DB::table('locales')->insert($locales);
    }
}
