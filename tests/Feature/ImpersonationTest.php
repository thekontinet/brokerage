<?php

namespace Tests\Feature;

use App\Features;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Lab404\Impersonate\Impersonate;
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

        $response = $this->get(route('impersonate', [
            'id' => $user->id
        ]));

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

        $response = $this->get(route('impersonate', [
            'id' => $admin->id,
        ]));

        $this->assertAuthenticatedAs($user);
    }

    public function test_admin_stop_impersonating_user()
    {
        if (!Features::impersonation()) {
            return $this->markTestSkipped('Impersonation feature is turned off');
        }
        $user = User::factory()->create();
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin);

        // auth()->user()->impersonate($user);

        // $response = $this->get(route('impersonate.leave'));

        $this->assertAuthenticatedAs($admin, 'web');
    }
}
