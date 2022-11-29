<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                [
                    'name' => 'News & Events template',
                    'slug' => 'news-and-event',
                    'status' => '1',
                    'type' => '1'
                ],
                [
                    'name' => 'Job posting',
                    'slug' => 'job-posting',
                    'status' => '1',
                    'type' => '1'
                ],
                [
                    'name' => 'Case study template',
                    'slug' => 'case-study-template',
                    'status' => '1',
                    'type' => '1'
                ]
            ]
        );
    }
}
