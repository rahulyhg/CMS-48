<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Tianni',
            'last_name' => 'Myers',
            'email' => 'tianninm@gmail.com',
            'password' => bcrypt('Tm2019'),
            'role_id' => 1
        ]);
    }
}
