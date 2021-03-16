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

        $pages = [];

        foreach (range(1, 7) as $index) {
            $pages[] = array(
                'tag' => 'home',
                'url' => '/',
                'view_path' => 'home/index',
                'locale_id' => $index,
                'for_global' => 1,
                'for_au' => 1
            );
            $pages[] = array(
                'tag' => '404 Error',
                'url' => null,
                'view_path' => 'errors.404',
                'locale_id' => $index,
                'for_global' => 1,
                'for_au' => 1
            );
        }

        DB::table('pages')->insert($pages);
    }
}
