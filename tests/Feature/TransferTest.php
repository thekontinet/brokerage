<?php

namespace Tests\Feature;

use App\Models\Wallet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TransferTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_transfer()
    {
        /** @var Wallet */
        $wallet = Wallet::factory()->forUser()->create();
        $wallet->credit(1000, null, Wallet::GROUP_PROFIT)->approve();

        $this->actingAs($wallet->user);

        $this->get(route('transfer.index'))
            ->assertSee('amount')
            ->assertSee('from')
            ->assertSee('to');

        $amount = 500;
        $this->post(route('transfer.store'), [
            'amount' => $amount,
            'from' => Wallet::GROUP_PROFIT,
            'to' => Wallet::GROUP_BALANCE,
        ]);

        $this->assertEquals($wallet->getBalance(), $amount);
        $this->assertEquals($wallet->getBalance(Wallet::GROUP_PROFIT), 500);
    }

    /** @test */
    public function user_can_not_transfer_when_balance_is_insufficient()
    {
        /** @var Wallet */
        $wallet = Wallet::factory()->forUser()->create();
        $wallet->credit(29, null, Wallet::GROUP_PROFIT)->approve();

        $this->actingAs($wallet->user);

        $this->get(route('transfer.index'))
            ->assertSee('amount')
            ->assertSee('from')
            ->assertSee('to');

        $amount = 100;
        $this->post(route('transfer.store'), [
            'amount' => $amount,
            'from' => Wallet::GROUP_PROFIT,
            'to' => Wallet::GROUP_BALANCE,
        ])->assertStatus(302);

        $this->assertEquals($wallet->getBalance(), 0);
        $this->assertEquals($wallet->getBalance(Wallet::GROUP_PROFIT), 29);
    }
}
