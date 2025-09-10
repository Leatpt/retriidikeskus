<?php

namespace App\Livewire;

use Livewire\Component;

class RegisterForm extends Component
{
    public $showRegisterModal = false;
    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|string|min:3|max:255',
        'email' => 'required|email',
    ];

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
