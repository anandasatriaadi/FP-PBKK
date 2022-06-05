<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Table;

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

        Table::create([
            'status' => 1,
            'table_number' => 1
        ]);
        Table::create([
            'status' => 1,
            'table_number' => 2
        ]);
        Table::create([
            'status' => 1,
            'table_number' => 3
        ]);
        Table::create([
            'status' => 1,
            'table_number' => 4
        ]);
        Table::create([
            'status' => 1,
            'table_number' => 5
        ]);
        Table::create([
            'status' => 1,
            'table_number' => 6
        ]);
        Table::create([
            'status' => 1,
            'table_number' => 7
        ]);
        Table::create([
            'status' => 1,
            'table_number' => 8
        ]);
        Table::create([
            'status' => 1,
            'table_number' => 9
        ]);
        Table::create([
            'status' => 1,
            'table_number' => 10
        ]);

        Product::create([
            'name' => 'Nasi Goreng',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, totam odio.
                             Exercitationem quis facilis laborum soluta eos blanditiis harum at!',
            'price' => '20000',
            'image' => '1654171813_gettyimages-923629582-1024x1024.jpg'
        ]);
        Product::create([
            'name' => 'Nasi Kuning',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, totam odio.
                             Exercitationem quis facilis laborum soluta eos blanditiis harum at!',
            'price' => '20000',
            'image' => '1654441443_nasi-kuning-800x600.jpg'
        ]);
        Product::create([
            'name' => 'Sup Konro',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, totam odio.
                             Exercitationem quis facilis laborum soluta eos blanditiis harum at!',
            'price' => '15000',
            'image' => '1654446847_sop-konro.jpg'
        ]);
        Product::create([
            'name' => 'Bakwan Sayur',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, totam odio.
                             Exercitationem quis facilis laborum soluta eos blanditiis harum at!',
            'price' => '15000',
            'image' => '1654447108_bakwan-3193.jpg'
        ]);
    }
}