<?php

namespace Tests\Feature;

use App\Models\Currency;
use App\Models\Wallet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DepositTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_deposit()
    {
        $wallet = Wallet::factory()->forUser()->create();
        $currency = Currency::factory()->create();

        $this->actingAs($wallet->user);

        $this->get(route('deposit.index'))
            ->assertSee('amount')
            ->assertSee('currency')
            ->assertSee('address');

        $this->post(route('deposit.store'), [
            'amount' => 500,
            'currency' => $currency->name,
        ]);

        $this->assertEquals($wallet->getPendingBalance(), 500);
    }
}
