<?php

namespace Database\Seeders;

use App\Models\PageContent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear site_configs table.
        DB::table('page_content')->delete();

        $content = array(
            // English Home Banner
            0 => array(
                'page_id' => 0,
                'component' => 'banner_left_title_1',
                'type' => 'text',
                'value' => 'Combining a Transparent',
            ),
            1 => array(
                'page_id' => 0,
                'component' => 'banner_left_title_2',
                'type' => 'text',
                'value' => 'Trading Environment',
            ),
            2 => array(
                'page_id' => 0,
                'component' => 'banner_left_title_3',
                'type' => 'text',
                'value' => 'with the Best Pricing',
            ),
            3 => array(
                'page_id' => 0,
                'component' => 'banner_left_btn_wrapper_1',
                'type' => 'text',
                'value' => 'Start Trading',
            ),
            4 => array(
                'page_id' => 0,
                'component' => 'banner_left_btn_wrapper_2',
                'type' => 'text',
                'value' => 'or',
            ),
            5 => array(
                'page_id' => 0,
                'component' => 'banner_left_btn_wrapper_3',
                'type' => 'text',
                'value' => 'Try Demo Account',
            ),

            // Chinese Home Banner
            6 => array(
                'page_id' => 1,
                'component' => 'banner_left_title',
                'type' => '最优报价与透明的交易环境相结合',
                'value' => 'Combining a Transparent',
            ),
            7 => array(
                'page_id' => 1,
                'component' => 'banner_left_btn_wrapper_1',
                'type' => 'text',
                'value' => '即刻开始交易',
            ),
            8 => array(
                'page_id' => 1,
                'component' => 'banner_left_btn_wrapper_2',
                'type' => 'text',
                'value' => '或',
            ),
            9 => array(
                'page_id' => 1,
                'component' => 'banner_left_btn_wrapper_3',
                'type' => 'text',
                'value' => '试用模拟账号',
            ),

        );

        DB::table('page_content')->insert($content);
    }
}
