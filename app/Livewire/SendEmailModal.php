<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Mail;

class SendEmailModal extends Component
{
    public $showModal = false;

    public $customerName;
    public $customerEmail;
    public $customerMessage;

    protected $rules = [
        'customerName'   => 'required|string|max:255',
        'customerEmail'  => 'required|email',
        'customerMessage' => 'required|string|max:2000',
    ];

    protected $listeners = ['openSendEmailModal' => 'showSendEmailModal'];

    #[On('openSendEmailModal')]
    public function showSendEmailModal()
    {
        $this->showModal = true;
    }

    public function sendEmail()
    {
        $this->validate();

        Mail::raw($this->customerMessage, function ($message) {
            $message->to('test@example.com')
                ->from($this->customerEmail, $this->customerName)
                ->subject('Retriidikeskus: Uus kiri');
        });
        dd($this->customerName, $this->customerEmail, $this->customerMessage);

        $this->reset(['customerName', 'customerEmail', 'customerMessage']);

        session()->flash('success', 'Sõnum saadetud!');
    }

    public function render()
    {
        return view('livewire.send-email-modal');
    }
}
