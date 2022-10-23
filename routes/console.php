<?php

use App\Models\Investment;
use App\Models\Plan;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('investment:profit', function () {
    Investment::active()
        ->with(['wallet', 'plan'])
        ->chunkById(100, function ($investments) {
            foreach ($investments as $investment) {
                $investment->updateProfit();
            }
        });
    $this->info("Profit has been added to all investments");
})->purpose('Crediting users investments');
