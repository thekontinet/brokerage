<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Currency;
use App\Models\Plan;
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
        if(config('app.env') !== 'production'){
            \App\Models\User::factory(3)->hasWallet()->create();
            Plan::factory(3)->create();
        }

        \App\Models\User::factory()->admin()->hasWallet()->create([
            'name' => 'Admin User',
            'email' => 'admin@email.com',
            'ref_link' => time()
        ]);

        Currency::factory(3)->create();
    }
}
