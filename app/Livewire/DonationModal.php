<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class DonationModal extends Component
{
    public $showModal = false;

    protected $listeners = ['openDonationModal' => 'showDonationModal'];

    #[On('openDonationModal')]
    public function showDonationModal()
    {
        $this->showModal = true;
    }

    public function render()
    {
        return view('livewire.donation-modal');
    }
}
