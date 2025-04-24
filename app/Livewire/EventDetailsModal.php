<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Event;
use Livewire\Attributes\On;

class EventDetailsModal extends Component
{
    public $event;
    public $showModal = false;

    protected $listeners = ['openEventDetails' => 'showEventDetails'];

    #[On('openEventDetails')]
    public function showEventDetails($id)
    {
        $event = Event::findOrFail($id);
        $this->event = $event;
        $this->showModal = true;
    }

    public function closeEventDetails()
    {
        $this->showModal = false;
        $this->event = null;
    }

    public function render()
    {
        return view('livewire.event-details-modal');
    }
}
