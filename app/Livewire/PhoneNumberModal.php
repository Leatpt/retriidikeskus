<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class PhoneNumberModal extends Component
{
    public $showModal = false;

    protected $listeners = ['openPhoneNumberModal' => 'showPhoneNumberModal'];

    #[On('openPhoneNumberModal')]
    public function showPhoneNumberModal()
    {
        $this->showModal = true;
    }

    public function render()
    {
        return view('livewire.phone-number-modal');
    }
}
