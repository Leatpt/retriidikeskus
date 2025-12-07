<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class RegisterForm extends Component
{
    public $showRegisterModal = false;
    public $registerName;
    public $registerEmail;
    public $eventTitle;
    public $eventPrice;
    public $eventDates;

    protected $listeners = ['openRegisterModal' => 'showModal'];

    protected $rules = [
        'registerName' => 'required|string|min:3|max:255',
        'registerEmail' => 'required|email',
    ];

    protected $messages = [
        'registerName.required'    => 'Nimi on kohustuslik!',
        'registerName.string'      => 'Nimi peab olema tekst.',
        'registerName.min'         => 'Nimi peab olema vähemalt 3 tähemärki.',
        'registerName.max'         => 'Nimi ei tohi ületada 255 märki.',
        'registerEmail.required'   => 'E-posti aadress on kohustuslik!',
        'registerEmail.email'      => 'Palun sisesta korrektne e-posti aadress.',
    ];

    #[On('openRegisterModal')]
    public function showModal($event)
    {
        $this->eventTitle = $event['title'];
        $this->eventPrice = $event['price'];
        $this->eventDates = Carbon::parse($event['start_date'])->format('d.m');
        if (!empty($event['end_date']) && $event['end_date'] !== $event['start_date']) {
            $this->eventDates .= ' - ' . Carbon::parse($event['end_date'])->format('d.m');
        }
        $this->showRegisterModal = true;
    }

    public function sendRegistrationEmail()
    {
        $validatedData = $this->validate();
        $validatedData['eventTitle'] = $this->eventTitle;
        $validatedData['eventPrice'] = $this->eventPrice;
        $validatedData['eventDates'] = $this->eventDates;

        try {
            Mail::to('tauno.kibur@gmail.com')->send(new \App\Mail\RegisterMail($validatedData));

            $this->reset(['registerName', 'registerEmail']);
            session()->flash('success', 'Registreerimis Soov Edastatud! 🎉');
        } catch (\Exception $e) {
            session()->flash('error', 'Midagi läks valesti. Palun proovi uuesti.');
        }

        $this->showRegisterModal = false;
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
