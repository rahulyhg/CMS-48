<?php

use Illuminate\Database\Seeder;

class NavItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navitems')->insert([
            [
                'name' => 'Home',
                'uri' => 'home',
                'parent_id' => 0,
                'active' => 1
            ],
            [
                'name' => 'About',
                'uri' => 'about',
                'parent_id' => 0,
                'active' => 1
            ],
            [
                'name' => 'About Me',
                'uri' => 'about-me',
                'parent_id' => 2,
                'active' => 1
            ]
        ]);
    }
}
