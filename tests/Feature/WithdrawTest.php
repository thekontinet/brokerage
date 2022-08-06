<?php

namespace Tests\Feature;

use App\Models\Currency;
use App\Models\Wallet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WithdrawTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_withdraw()
    {
        $wallet = Wallet::factory()->create();
        $currency = Currency::factory()->create();
        $wallet->credit(1000, 'bitcoin')->approve();

        $this->actingAs($wallet->user);

        $this->get(route('withdraw.index'))
            ->assertSee('amount')
            ->assertSee('currency')
            ->assertSee('address');

            $this->post(route('withdraw.store'), [
            'amount' => 500,
            'currency' => $currency->name,
            'address' => '32323242233'
        ]);


        $this->assertEquals($wallet->getPendingBalance(), -500);
    }

      /** @test */
      public function user_cannot_withdraw_more_than_balance()
      {
          $wallet = Wallet::factory()->create();
          $wallet->credit(10, 'bitcoin')->approve();

          $this->actingAs($wallet->user);

          $this->get(route('withdraw.index'))
              ->assertSee('amount')
              ->assertSee('currency')
              ->assertSee('address');

          $this->post(route('withdraw.store'), [
              'amount' => 500,
              'currency' => 'bitcoin',
              'address' => '32323242233'
          ]);


          $this->assertEquals($wallet->getBalance(), 10);
          $this->assertEquals($wallet->getPendingBalance(), 0);
      }
}
