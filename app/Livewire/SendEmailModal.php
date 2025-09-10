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
        'customerName'   => 'required|string|min:3|max:255',
        'customerEmail'  => 'required|email',
        'customerMessage' => 'required|string|max:2000',
    ];

    protected $messages = [
        'customerName.required'    => 'Nimi on kohustuslik!',
        'customerName.string'      => 'Nimi peab olema tekst.',
        'customerName.min'         => 'Nimi peab olema vähemalt 3 tähemärki.',
        'customerName.max'         => 'Nimi ei tohi ületada 255 märki.',
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
        $validatedData = $this->validate();

        try {
            Mail::to('redealey@gmail.com')->send(new \App\Mail\ContactUsMail($validatedData));

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
