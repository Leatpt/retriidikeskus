<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class SendEmailModal extends Component
{
    public $showModal = false;

    protected $listeners = ['openSendEmailModal' => 'showSendEmailModal'];

    #[On('openSendEmailModal')]
    public function showSendEmailModal()
    {
        $this->showModal = true;
    }

    public function render()
    {
        return view('livewire.send-email-modal');
    }
}
