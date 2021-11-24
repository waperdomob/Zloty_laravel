<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fundacionBF = User::create([
            'name' => 'fundacionBF',
            'email' => 'fundacionBF@email.com',
            'phone' => '123456789',
            'city' => 'Bogotá',
            'password' => bcrypt('12345678')
        ]);

        $fundacionBF->assignRole('admin');
    }
}
