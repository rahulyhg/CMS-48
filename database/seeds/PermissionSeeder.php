<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'Admin'],
            ['name' => 'Author']
        ]);

        DB::table('permissions')->insert([
            ['name' => 'view-page'],
            ['name' => 'create-page'],
            ['name' => 'update-page'],
            ['name' => 'delete-page']
        ]);

        DB::table('permission_roles')->insert([
            ['role_id' => 1, 'permission_id' => 1],
            ['role_id' => 1, 'permission_id' => 2],
            ['role_id' => 1, 'permission_id' => 3],
            ['role_id' => 1, 'permission_id' => 4],
            ['role_id' => 2, 'permission_id' => 1]
        ]);
    }
}
