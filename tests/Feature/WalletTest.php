<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WalletTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_admin_can_credit_user_wallets()
    {
        $admin = User::factory()->admin()->hasWallet()->create();
        $user = User::factory()->hasWallet()->create();
        $this->actingAs($admin);

        $this->get(route('admin.wallets.show', $user->wallet->id))
            ->assertStatus(200)
            ->assertSee('amount')
            ->assertSee('group')
            ->assertSee('type');

        $this->put(route('admin.wallets.show', $user->wallet->id), [
            'amount' => 5000,
            'group' => "balance",
            'type' => "credit",
        ]);

        $this->put(route('admin.wallets.show', $user->wallet->id), [
            'amount' => 2000,
            'group' => "balance",
            'type' => "debit",
        ]);

        $this->assertEquals($user->wallet->getBalance(), 3000);
    }

    /** @test */
    public function only_admin_can_view_others_balance()
    {
        $admin = User::factory()->admin()->hasWallet()->create();
        $user = User::factory()->hasWallet()->create();
        $this->actingAs($admin);

        $this->get(route('admin.wallets.show', $user->wallet->id))
            ->assertStatus(200)
            ->assertSee('balance');

        $this->actingAs($user);

        $this->get(route('admin.wallets.show', $admin->wallet->id))
            ->assertStatus(302);
    }

    /** @test */
    public function only_admin_can_view_others_transactions()
    {
        $admin = User::factory()->admin()->hasWallet()->create();
        $user = User::factory()->hasWallet()->create();
        $this->actingAs($admin);

        $this->get(route('admin.transactions.show', $user->wallet->id))
            ->assertStatus(200)
            ->assertSee('transactions');

        $this->actingAs($user);

        $this->get(route('admin.transactions.show', $user->wallet->id))
            ->assertStatus(302);
    }
}
