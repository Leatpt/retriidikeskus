<?php

namespace App\Livewire\Events;

use Livewire\Component;
use App\Models\Event;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;


#[Layout('components.layouts.app')]
class Index extends Component
{
    use WithPagination;

    public $showModal = false;
    public $selectedEvents = [];
    public $selectAll = false;

    public function addEvent()
    {
        $this->dispatch('openCreate');
    }

    public function editEvent(Event $event)
    {
        $this->dispatch('openEdit', id: $event->id);
    }

    public function delete(Event $event)
    {
        $event->delete();
        unset($this->events);
        session()->flash('message', 'Sündmus edukalt kustutatud.');
    }

    public function updatedSelectAll()
    {
        if ($this->selectAll) {
            $this->selectedEvents = Event::pluck('id')->toArray();
        } else {
            $this->selectedEvents = [];
        }
    }


    public function updatedSelectedEvents()
    {
        $eventsOnPage = Event::paginate(20, pageName: 'events-page')->pluck('id')->toArray();
        $this->selectAll = !array_diff($eventsOnPage, $this->selectedEvents);
    }

    public function deleteSelected()
    {
        if (empty($this->selectedEvents)) {
            session()->flash('error', 'Palun vali vähemalt üks sündmus.');
            return;
        }

        Event::whereIn('id', $this->selectedEvents)->delete();

        $this->selectedEvents = [];
        $this->selectAll = false;

        session()->flash('message', 'Valitud sündmused on kustutatud.');
    }



    public function render()
    {
        return view('livewire.events.index', [
            'events' => Event::with('category')->paginate(20, pageName: 'events-page'),
        ]);
    }
}
