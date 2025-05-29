<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'kevin',
            'email' => 'kevinag@gmail.com',
            'password' => bcrypt('123123q'),
            'role' => 'user'
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'quoc@gmail.com',
            'password' => bcrypt('123123q'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'nguyen@gmail.com',
            'password' => bcrypt('123123q'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'phuc@gmail.com',
            'password' => bcrypt('123123q'),
            'role' => 'admin',
            'is_active' => 1,
        ]);
    }
}
