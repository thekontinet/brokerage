<?php

namespace Tests\Feature;

use App\Features;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ImpersonationTest extends TestCase
{

    use RefreshDatabase;

    public function test_admin_can_impersonate_user()
    {
        if (!Features::impersonation()) {
            return $this->markTestSkipped('Impersonation feature is turned off');
        }

        $user = User::factory()->create();
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin);

        $response = $this->get(route('impersonate', $user->id));

        $this->assertAuthenticatedAs($user, 'web');
    }

    public function test_user_cannot_impersonate_admin()
    {
        if (!Features::impersonation()) {
            return $this->markTestSkipped('Impersonation feature is turned off');
        }

        $user = User::factory()->create();
        $admin = User::factory()->admin()->create();

        $this->actingAs($user);

        $response = $this->get(route('impersonate', $admin->id));

        $this->assertAuthenticatedAs($user, 'web');
    }

    public function test_admin_stop_impersonating_user()
    {
        if (!Features::impersonation()) {
            return $this->markTestSkipped('Impersonation feature is turned off');
        }
        $user = User::factory()->create();
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin);

        $response = $this->get(route('impersonate', [
            'id' => $user->id
        ]));

        $response = $this->get(route('impersonate.leave', $user->id));

        $this->assertAuthenticatedAs($admin, 'web');
    }
}
