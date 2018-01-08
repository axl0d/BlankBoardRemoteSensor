<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('permission_role')->insert([

            // Superadmin

            // Administrator
            ['role_id' => 2, 'permission_id' => 1],
            ['role_id' => 2, 'permission_id' => 2],
            ['role_id' => 2, 'permission_id' => 3],
            ['role_id' => 2, 'permission_id' => 4],
            ['role_id' => 2, 'permission_id' => 5],
            ['role_id' => 2, 'permission_id' => 6],
            ['role_id' => 2, 'permission_id' => 7],
            ['role_id' => 2, 'permission_id' => 8],
            ['role_id' => 2, 'permission_id' => 9],
            ['role_id' => 2, 'permission_id' => 10],
            ['role_id' => 2, 'permission_id' => 11],
            ['role_id' => 2, 'permission_id' => 12],

            // Manager
            ['role_id' => 3, 'permission_id' => 1],
            ['role_id' => 3, 'permission_id' => 2],
            ['role_id' => 3, 'permission_id' => 3],
            ['role_id' => 3, 'permission_id' => 4],

            // User
            ['role_id' => 4, 'permission_id' => 13],
            ['role_id' => 4, 'permission_id' => 14],
            ['role_id' => 4, 'permission_id' => 15],
            ['role_id' => 4, 'permission_id' => 16],
            ['role_id' => 4, 'permission_id' => 17],
            ['role_id' => 4, 'permission_id' => 18],
            ['role_id' => 4, 'permission_id' => 19],
            ['role_id' => 4, 'permission_id' => 20],

            // Ventanilla
            ['role_id' => 5, 'permission_id' => 25],
            ['role_id' => 5, 'permission_id' => 26],
            ['role_id' => 5, 'permission_id' => 27],
            ['role_id' => 5, 'permission_id' => 28],

            // Registrador
            ['role_id' => 6, 'permission_id' => 21],
            ['role_id' => 6, 'permission_id' => 22],
            ['role_id' => 6, 'permission_id' => 23],
            ['role_id' => 6, 'permission_id' => 24],
        ]);
    }
}