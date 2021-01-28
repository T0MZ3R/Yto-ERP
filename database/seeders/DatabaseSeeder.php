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

        \App\Models\Stock::factory(400)->create();

        \App\Models\Client::factory(350)->create();

        \App\Models\Facture::factory(100)->create();

        \App\Models\Facture::create([
            'created_at' => '2021-01-05 00:00:00',
            'id_client' => rand(1,75),
            'id_stock' => rand(1,75),
            'nb' => rand(1,4),
            'price' => rand(80,120),
        ]);
        \App\Models\Facture::create([
            'created_at' => '2021-01-06 00:00:00',
            'id_client' => rand(1,75),
            'id_stock' => rand(1,75),
            'nb' => rand(1,4),
            'price' => rand(80,120),
        ]);
        \App\Models\Facture::create([
            'created_at' => '2021-01-15 00:00:00',
            'id_client' => rand(1,75),
            'id_stock' => rand(1,75),
            'nb' => rand(1,4),
            'price' => rand(80,120),
        ]);
        \App\Models\Facture::create([
            'created_at' => '2021-01-25 00:00:00',
            'id_client' => rand(1,75),
            'id_stock' => rand(1,75),
            'nb' => rand(1,4),
            'price' => rand(80,120),
        ]);
        \App\Models\Facture::create([
            'created_at' => '2021-01-25 00:00:00',
            'id_client' => rand(1,75),
            'id_stock' => rand(1,75),
            'nb' => rand(1,4),
            'price' => rand(80,120),
        ]);
        \App\Models\Facture::create([
            'created_at' => '2021-01-25 00:00:00',
            'id_client' => rand(1,75),
            'id_stock' => rand(1,75),
            'nb' => rand(1,4),
            'price' => rand(80,120),
        ]);
        \App\Models\Facture::create([
            'created_at' => \Carbon\Carbon::today(),
            'id_client' => rand(1,75),
            'id_stock' => rand(1,75),
            'nb' => rand(1,4),
            'price' => rand(80,120),
        ]);
        \App\Models\Facture::create([
            'created_at' => \Carbon\Carbon::today(),
            'id_client' => rand(1,75),
            'id_stock' => rand(1,75),
            'nb' => rand(1,4),
            'price' => rand(80,120),
        ]);
        \App\Models\Facture::create([
            'created_at' => \Carbon\Carbon::today(),
            'id_client' => rand(1,75),
            'id_stock' => rand(1,75),
            'nb' => rand(1,4),
            'price' => rand(80,120),
        ]);
    }
}

// 'created_at' => $this->faker->date,
// 'id_client' => rand(1,75),
// 'id_stock' => rand(1,75),
// 'nb' => rand(1,4),
// 'price' => rand(80,120),