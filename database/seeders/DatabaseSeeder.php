<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Table::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@annd.dev',
            'role' => 'admin'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Staff',
            'email' => 'staff@annd.dev',
            'role' => 'staff'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@annd.dev',
            'role' => 'user'
        ]);
    }
}
