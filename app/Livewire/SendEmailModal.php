<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


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

    protected $messages = [
        'customerName.required'    => 'Nimi on kohustuslik!',
        'customerName.string'      => 'Nimi peab olema tekst.',
        'customerEmail.required'   => 'E-posti aadress on kohustuslik!',
        'customerEmail.email'      => 'Palun sisesta korrektne e-posti aadress.',
        'customerMessage.required' => 'Sõnumi väli on kohustuslik!',
        'customerMessage.string'   => 'Sõnum peab olema tekst.',
        'customerMessage.max'      => 'Sõnum ei tohi ületada 2000 märki.',
    ];

    protected $listeners = ['openSendEmailModal' => 'showSendEmailModal'];

    #[On('openSendEmailModal')]
    public function showSendEmailModal()
    {
        $this->showModal = true;
    }

    public function updatedShowModal($value)
    {
        if ($value === false) {
            $this->resetValidation();
            $this->reset(['customerName', 'customerEmail', 'customerMessage']);
        }
    }

    public function sendEmail()
    {
        $this->validate();

        try {
            /*
            Mail::raw($this->customerMessage, function ($message) {
                $message->to('test@example.com')
                    ->from($this->customerEmail, $this->customerName)
                    ->subject('Retriidikeskus: Uus kiri');
            });
        */
            Log::info('Contact form submitted', [
                'name' => $this->customerName,
                'email' => $this->customerEmail,
                'message' => $this->customerMessage,
            ]);

            $this->reset(['customerName', 'customerEmail', 'customerMessage']);
            session()->flash('success', 'Sõnum saadetud! 🎉');
        } catch (\Exception $e) {
            session()->flash('error', 'Midagi läks valesti. Palun proovi uuesti.');
        }

        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.send-email-modal');
    }
}
