<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class RegisterForm extends Component
{
    public $showRegisterModal = false;
    public $registerName;
    public $registerEmail;
    public $eventTitle;
    public $eventPrice;

    protected $listeners = ['openRegisterModal' => 'showModal'];

    protected $rules = [
        'name' => 'required|string|min:3|max:255',
        'email' => 'required|email',
    ];

    #[On('openRegisterModal')]
    public function showModal($event)
    {
        $this->eventTitle = $event['title'];
        $this->eventPrice = $event['price'];
        $this->showRegisterModal = true;
    }

    public function register()
    {
        $this->validate();

        // Handle registration (DB insert, Mail, etc.)
        session()->flash('success', 'Registreerimine õnnestus!');

        $this->reset(['name', 'email', 'showRegisterModal']);
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
