<?php

namespace Tests\Feature;

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
        $wallet = Wallet::factory()->create();
        $this->actingAs($wallet->user);

        $this->get(route('deposit'))
            ->assertSee('amount')
            ->assertSee('currency')
            ->assertSee('address')
            ->assertSee('alt=qr code');

        $amount = 500;
        $response = $this->post(route('deposit'), [
            'amount' => $amount,
            'currency' => 'bitcoin',
        ]);


        $this->assertEquals($user->wallet->pendingBalance, $amount);
    }
}
