<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->truncate();

        DB::table('pages')->insert([
            [
                'name' => 'first_page',
                'yesterday_cr' => 0,
                'today_cr' => 0,
                'week_cr' => 0
            ],
            [
                'name' => 'second_page',
                'yesterday_cr' => 0,
                'today_cr' => 0,
                'week_cr' => 0
            ],
            [
                'name' => 'third_page',
                'yesterday_cr' => 0,
                'today_cr' => 0,
                'week_cr' => 0
            ],
            [
                'name' => 'fourth_page',
                'yesterday_cr' => 0,
                'today_cr' => 0,
                'week_cr' => 0
            ],
            [
                'name' => 'fifth_page',
                'yesterday_cr' => 0,
                'today_cr' => 0,
                'week_cr' => 0
            ]
        ]);
    }
}
