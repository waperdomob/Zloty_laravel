<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);
        $role2 = Role::create([
            'name' => 'user',
            'guard_name' => 'web'
        ]);
    }
}
