<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Currency;
use App\Models\Wallet;
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

        \App\Models\User::factory()->admin()->hasWallet()->create([
            'name' => 'Admin User',
            'email' => 'example@email.com',
            'ref_link' => time()
        ]);

        Currency::factory(3)->create();
    }
}
