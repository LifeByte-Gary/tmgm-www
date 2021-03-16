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
        DB::table('locales')->delete();

        $locales = array(
            0 => array(
                'url' => 'en',
                'code' => 'en',
                'flag' => '/img/flags/uk.png',
                'description' => 'English',
                'active_in_au' => 1,
                'active_in_global' => 1
            ),
            1 => array(
                'url' => 'chs',
                'code' => 'zh-Hans',
                'flag' => '/img/flags/cn.png',
                'description' => '简体中文',
                'active_in_au' => 1,
                'active_in_global' => 1
            ),
            2 => array(
                'url' => 'cht',
                'code' => 'zh-Hant',
                'flag' => '/img/flags/cn.png',
                'description' => '繁体中文',
                'active_in_au' => 0,
                'active_in_global' => 1
            ),
            3 => array(
                'url' => 'pt',
                'code' => 'pt',
                'flag' => '/img/flags/br.png',
                'description' => 'Português',
                'active_in_au' => 0,
                'active_in_global' => 1
            ),
            4 => array(
                'url' => 'es',
                'code' => 'es',
                'flag' => '/img/flags/es.png',
                'description' => 'Español',
                'active_in_au' => 0,
                'active_in_global' => 1
            ),
            5 => array(
                'url' => 'th',
                'code' => 'th',
                'flag' => '/img/flags/th.png',
                'description' => 'ภาษาไทย',
                'active_in_au' => 0,
                'active_in_global' => 1
            ),
            6 => array(
                'url' => 'vi',
                'code' => 'vi',
                'flag' => '/img/flags/vn.png',
                'description' => 'Tiếng Việt',
                'active_in_au' => 0,
                'active_in_global' => 1
            ),

        );

        DB::table('locales')->insert($locales);
    }
}
