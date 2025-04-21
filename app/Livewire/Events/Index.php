<?php

namespace App\Livewire\Events;

use Livewire\Component;
use App\Models\Event;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;
use Livewire\Attributes\On;

#[Layout('components.layouts.app')]
class Index extends Component
{
    use WithPagination;

    public $showModal = false;

    public function addEvent()
    {
        $this->dispatch('openCreate');
    }

    public function editEvent()
    {
        $this->dispatch('openEdit');
    }

    public function delete(Event $event)
    {
        $event->delete();
        unset($this->events);
        session()->flash('message', 'Sündmus edukalt kustutatud.');
    }

    public function render()
    {
        return view('livewire.events.index', [
            'events' => Event::with('category')->paginate(20, pageName: 'events-page'),
        ]);
    }
}
