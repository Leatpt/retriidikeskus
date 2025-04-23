<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Event;

class EventDetails extends Component
{
    public $selectedDate;
    public $events = [];

    protected $listeners = ['dateSelected' => 'loadEventsForDate'];

    public function loadEventsForDate($date)
    {
        $this->selectedDate = $date;
        $this->events = Event::whereDate('start_date', $date)->get();
    }

    public function render()
    {
        return view('livewire.event-details');
    }
}
