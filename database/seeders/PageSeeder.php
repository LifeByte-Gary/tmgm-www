<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear site_configs table.
        DB::table('pages')->delete();

        $pages = array(
            0 => array(
                'tag' => 'home',
                'url' => '/',
                'view_path' => 'home/index',
                'locale_id' => 1,
                'for_global' => 1,
                'for_au' => 1
            ),
            1 => array(
                'tag' => 'home',
                'url' => '/',
                'view_path' => 'home/index',
                'locale_id' => 2,
                'for_global' => 1,
                'for_au' => 1
            ),
            2 => array(
                'tag' => '404 Error',
                'url' => null,
                'view_path' => 'errors.404',
                'locale_id' => 1,
                'for_global' => 1,
                'for_au' => 1
            ),
            3 => array(
                'tag' => '404 Error',
                'url' => null,
                'view_path' => 'errors.404',
                'locale_id' => 2,
                'for_global' => 1,
                'for_au' => 1
            ),
        );

        DB::table('pages')->insert($pages);
    }
}
