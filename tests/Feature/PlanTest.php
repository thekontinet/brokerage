<?php

namespace Tests\Feature;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PlanTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_can_view_all_plans()
    {
        $this->actingAs(User::factory()->admin()->create());
        Plan::factory()->create();
        $response = $this->get(route('admin.plans.index'))
            ->assertSeeTextInOrder(Plan::all()->pluck('title')->toArray())
            ->assertStatus(200);
    }

    public function test_admin_can_create_plan()
    {
        $this->actingAs(User::factory()->admin()->create());
        $this->get(route('admin.plans.index'));
        $this->post(route('admin.plans.store'), [
            'title' => 'Plan 1',
            'price' => 50000,
            'type' => 'monthly',
            'percentage' => 10,
            'extra' => ['extra 1']
        ])->assertStatus(302);

        $this->assertModelExists(Plan::where('title', 'Plan 1')->first());
    }

    public function test_admin_can_delete_plan()
    {
        $this->actingAs(User::factory()->admin()->create());
        $plan = Plan::factory()->create();
        $this->delete(route('admin.plans.destroy', $plan->id))->assertStatus(302);
        $this->assertModelMissing($plan);
    }
}
