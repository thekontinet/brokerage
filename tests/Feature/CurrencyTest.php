<?php

namespace Tests\Feature;

use App\Models\Currency;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CurrencyTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_all_currency()
    {
        $this->actingAs(User::factory()->admin()->create());
        Currency::factory(5)->create();
        $this->get(route('admin.currencies.create'))
            ->assertSeeInOrder(Currency::all()->pluck('title')->toArray())
            ->assertStatus(200);
    }

    public function test_admin_can_add_currency()
    {
        $this->actingAs(User::factory()->admin()->create());
        $this->get(route('admin.currencies.create'))
            ->assertSee('title')
            ->assertSee('address')
            ->assertStatus(200);

        $formData = [
            'name' => 'bitcoin',
            'address' => '334344',
        ];
        $response = $this->post(route('admin.currencies.store'), $formData)->assertStatus(302);
        $currency = Currency::where($formData)->first();

        $this->assertModelExists($currency);
    }

    public function test_admin_can_delete_currency()
    {
        $currency = Currency::factory()->create(['name' => 'ethereum']);
        $this->actingAs(User::factory()->admin()->create());
        $this->delete(route('admin.currencies.destroy', $currency->id))->assertStatus(302);
        $this->assertModelMissing($currency);
    }
}
