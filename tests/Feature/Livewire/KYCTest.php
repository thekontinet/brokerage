<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\KYCForm;
use App\Models\Kyc;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class KYCTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_must_fill_validate_data()
    {
        $user = User::factory()->create();
        Livewire::actingAs($user);
        $livewire = Livewire::test(KYCForm::class);
        $livewire->call('submit');
        $livewire->assertHasErrors(['form.*']);
    }

    /** @test */
    public function user_can_submit_kyc()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        Livewire::actingAs($user);
        $livewire = Livewire::test(KYCForm::class);
        $livewire->set('form', [
            'type' => 'passport',
            'name' => 'Daniel',
            'phone' => '3423424342',
            'address' => 'mailer@email.com',
            'date_of_birth' => '12/12/2022',
        ]);
        Storage::fake('documents');
        $file = UploadedFile::fake()->image('avatar.png', 100, 100);
        $livewire->set('photo', $file);
        $livewire->call('submit');
        $livewire->assertNotSet('kyc', null);
        $livewire->assertSee('KYC Request Pending');
    }

    /** @test */
    public function admin_can_verify_kyc()
    {
        $this->actingAs(User::factory()->admin()->create());
        $kyc = Kyc::factory()->create();
        $resonse = $this->put(route('admin.kycs.update', $kyc->id));

        $kyc = $kyc->fresh();

        $resonse->assertStatus(302);
        $this->assertTrue($kyc->isVerified());
    }

    /** @test */
    public function admin_can_undo_kyc_verification()
    {
        $this->actingAs(User::factory()->admin()->create());
        $kyc = Kyc::factory()->create(['status' => true]);
        $resonse = $this->put(route('admin.kycs.update', $kyc->id));

        $kyc = $kyc->fresh();

        $resonse->assertStatus(302);
        $this->assertTrue($kyc->isPending());
    }

    /** @test */
    public function admin_delete_kyc_verification()
    {
        $this->actingAs(User::factory()->admin()->create());
        $kyc = Kyc::factory()->create();
        $resonse = $this->delete(route('admin.kycs.destroy', $kyc->id));
        $resonse->assertStatus(302);
        $this->assertModelMissing($kyc);
    }
}
