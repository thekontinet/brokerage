<?php

namespace Tests\Feature;

use App\Features;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ImpersonationTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_impersonate_user()
    {
        if (! Features::impersonation()) {
            return $this->markTestSkipped('Impersonation feature is turned off');
        }

        $user = User::factory()->create();
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin);

        $response = $this->post(route('admin.impersonate.store', [
            'user_id' => $user->id,
        ]));

        $this->assertAuthenticatedAs($user, 'web');
    }

    public function test_user_cannot_impersonate_admin()
    {
        if (! Features::impersonation()) {
            return $this->markTestSkipped('Impersonation feature is turned off');
        }

        $user = User::factory()->create();
        $admin = User::factory()->admin()->create();

        $this->actingAs($user);

        $response = $this->post(route('admin.impersonate.store', [
            'user_id' => $admin->id,
        ]));

        $this->assertAuthenticatedAs($user, 'web');
        $response->assertUnauthorized();
    }

    public function test_admin_stop_impersonating_user()
    {
        if (! Features::impersonation()) {
            return $this->markTestSkipped('Impersonation feature is turned off');
        }
        $user = User::factory()->create();
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin);

        $response = $this->post(route('admin.impersonate.store', [
            'user_id' => $user->id,
        ]));

        $response = $this->delete(route('impersonate.destroy', $user->id));

        $this->assertAuthenticatedAs($admin, 'web');
    }
}
