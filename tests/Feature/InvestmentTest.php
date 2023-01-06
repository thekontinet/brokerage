<?php

namespace Tests\Feature;

use App\Models\Investment;
use App\Models\Plan;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InvestmentTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_invest()
    {
        $wallet = Wallet::factory()->forUser()->create();
        $wallet->credit(5000)->approve();
        Plan::factory()->create([
            'price' => 3000
        ]);
        $this->actingAs($wallet->user);

        $response = $this->post(route('investments.store', [
            'amount' => 3000
        ]));

        $this->assertEquals($wallet->investment->amount, 3000);
        $this->assertEquals($wallet->getBalance(), 2000);
        $response->assertStatus(302);
    }

    /** @test */
    public function user_can_upgrade_investment()
    {
        $wallet = Wallet::factory()->forUser()->create();
        $wallet->credit(10000)->approve();
        Plan::factory()->create([
            'price' => 3000
        ]);
        Plan::factory()->create([
            'price' => 5000
        ]);
        $investment = Investment::subscribe($wallet, 3000);

        $this->actingAs($wallet->user);
        $response = $this->post(route('investments.store', [
            'amount' => 3000,
        ]));

        $investment = $investment->fresh();

        $this->assertEquals($wallet->investments->count(), 1);
        $this->assertEquals($investment->amount, 6000);
        $this->assertEquals($wallet->getBalance(), 4000);

        $response->assertRedirectContains('dashboard');
    }

    /** @test */
    public function automatic_profit_after_due_date()
    {
        Plan::factory()->create([
            'price' => 5000
        ]);

        Wallet::factory(20)->forUser()->create()->each(function ($wallet) {
            $wallet->credit(10000)->approve();
            $investment = Investment::subscribe($wallet, 5000);
            $investment->updated_at = now();
            $investment->save();
            $this->artisan('investment:profit')->expectsOutput("Profit has been added to all investments");
            $this->assertEquals(intval($wallet->getBalance(Wallet::GROUP_PROFIT)), intval($investment->getCalculatedProfit()));
        });
    }

    /** @test */
    public function cannot_recieve_profit_before_due_date()
    {
        Plan::factory()->create([
            'price' => 5000
        ]);

        Wallet::factory(20)->forUser()->create()->each(function ($wallet) {
            $wallet->credit(10000)->approve();
            $investment = Investment::subscribe($wallet, 5000);
            $this->artisan('investment:profit')->expectsOutput("Profit has been added to all investments");
            $this->assertEquals($wallet->getBalance(Wallet::GROUP_PROFIT), 0);
        });
    }

    /** @test */
    public function admin_can_close_investment()
    {
        Plan::factory()->create([
            'price' => 5000
        ]);
        $wallet = Wallet::factory()->forUser()->create();
        $wallet->credit(10000)->approve();
        $investment = Investment::subscribe($wallet, 5000);

        $this->actingAs(User::factory()->admin()->create());
        $this->put(route('admin.investments.update', $investment->id))->assertStatus(302);
        $investment = $investment->fresh();
        $this->assertTrue(!$investment->isActive());
    }
}
