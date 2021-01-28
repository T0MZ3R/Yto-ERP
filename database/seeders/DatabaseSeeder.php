<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            'name' => 'admin',
            'login' => 'admin',
            'password' => bcrypt('admin'),
        ]);

        \App\Models\Marque::create([
            'name' => 'Falken',
        ]);
        \App\Models\Marque::create([
            'name' => 'Michelin',
        ]);
        \App\Models\Marque::create([
            'name' => 'Continental',
        ]);
        \App\Models\Marque::create([
            'name' => 'Goodyear',
        ]);
        \App\Models\Marque::create([
            'name' => 'Pirelli',
        ]);
        \App\Models\Marque::create([
            'name' => 'Dunlop',
        ]);
        \App\Models\Marque::create([
            'name' => 'Bridgestone',
        ]);
        \App\Models\Marque::create([
            'name' => 'Hankook',
        ]);
        \App\Models\Marque::create([
            'name' => 'Firestone',
        ]);

        \App\Models\Stock::factory(75)->create();

        \App\Models\Client::factory(75)->create();

        \App\Models\Facture::factory(10)->create();
    }
}
