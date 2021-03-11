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
                'flag' => '/img/flag-uk.png',
                'description' => 'English',
                'active_in_au' => 1
            ),
            1 => array(
                'url' => 'chs',
                'code' => 'zh-CN',
                'flag' => '/img/flag-cn.png',
                'description' => '简体中文',
                'active_in_au' => 1
            ),
            2 => array(
                'url' => 'cht',
                'code' => 'zh-HK',
                'flag' => '/img/flag-cn.png',
                'description' => '繁体中文',
                'active_in_au' => 0
            ),
            3 => array(
                'url' => 'pt',
                'code' => 'pt-BR',
                'flag' => '/img/flags/br.png',
                'description' => 'Português',
                'active_in_au' => 0
            ),
            4 => array(
                'url' => 'es',
                'code' => 'es-ES',
                'flag' => '/img/flag-cn.png',
                'description' => 'Español',
                'active_in_au' => 0
            ),

        );

        DB::table('locales')->insert($locales);
    }
}
