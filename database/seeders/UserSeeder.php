<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('Admin');

        $user = User::create([
            'name' => 'raul',
            'email' => 'rmolina@educa.jcyl.es',
            'username' => 'raul',
            'password' => bcrypt('Infernal1$'),
        ]);

        $user->assignRole('Admin');
    }
}
