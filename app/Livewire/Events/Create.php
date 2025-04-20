<?php

namespace App\Livewire\Events;

use App\Livewire\Forms\EventForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Category;


class Create extends Component
{
    public $showModal = false;
    public $categories = [];
    public EventForm $form;

    public function mount()
    {
        $this->categories = Category::all();

        // Set default time values
        $this->form->start_time = '12:00';
        $this->form->end_time = '12:00';
        $this->form->start_date = today()->format('Y-m-d');
        $this->form->end_date = today()->format('Y-m-d');
    }

    public function save()
    {
        $this->form->store();
        $this->dispatch('eventCreated');
    }

    #[On('openModal')]
    public function openCreate()
    {
        $this->showModal = true;
    }

    #[On('eventCreated')]
    public function closeCreate()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.events.create');
    }
}
