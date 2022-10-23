<?php

namespace App\Http\Livewire;

use App\Models\Kyc;
use Livewire\Component;
use Livewire\WithFileUploads;

class KYCForm extends Component
{
    use WithFileUploads;

    public $photo;

    public $kyc = null;

    public $form = [
        'type' => 'passport',
        'name' => '',
        'phone' => '',
        'address' => '',
        'date_of_birth' => '',
    ];

    public function mount()
    {
        $this->kyc = auth()->user()?->kyc;
    }

    public function submit()
    {
        $this->validate([
            'form.type' => ['required', 'in:passport,id'],
            'form.name' => ['required', 'string'],
            'form.phone' => ['required', 'string'],
            'form.address' => ['required', 'string'],
            'form.date_of_birth' => ['required', 'date'],
            'photo' => ['required', 'image', 'max:2048']
        ]);

        $this->form['documentURL'] = $this->photo->store('documents', 'public');
        $data = ['data' => $this->form];
        $data['user_id'] = auth()->id();
        $kyc = Kyc::create($data);
        $this->kyc = $kyc;
        $this->emit('saved');
    }

    public function render()
    {
        return view('livewire.kyc-form');
    }
}
