<?php

namespace App\Livewire\Events;

use Livewire\Component;
use App\Models\Event;
use App\Models\Category;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('components.layouts.app')]
class Index extends Component
{
    use WithPagination;

    public $showModal = false;

    public function addEvent()
    {
        $this->dispatch('openModal');
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
            'events' => Event::with('category')->paginate(20),
        ]);
    }
}
