<?php

namespace App\Livewire\Events;

use Livewire\Component;
use App\Livewire\Forms\EventForm;
use App\Models\Event;
use Livewire\Attributes\On;
use App\Models\Category;


class Edit extends Component
{
    public $showModal = false;
    public $categories = [];
    public EventForm $form;


    public function mount()
    {
        $this->categories = Category::all();
    }

    public function save()
    {
        $this->form->update();
        $this->redirect('/events', navigate: true);
    }

    #[On('openEdit')]
    public function openEdit($id)
    {
        $event = Event::findOrFail($id);
        $this->form->setEvent($event);
        $this->showModal = true;
    }

    public function render()
    {
        return view('livewire.events.edit');
    }
}
