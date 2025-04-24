<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Event;
use Carbon\Carbon;

class EventDetails extends Component
{
    public $selectedDate;
    public $events = [];
    public $upcomingEvent;

    protected $listeners = ['dateSelected' => 'loadEventsForDate'];

    public function mount()
    {
        $this->getUpcomingEvent();
    }

    public function getUpcomingEvent()
    {
        $currentDate = Carbon::now();

        $upcomingEvent = Event::where('start_date', '>=', $currentDate)
            ->orderBy('start_date', 'asc')
            ->first();

        if ($upcomingEvent) {
            $this->upcomingEvent = $upcomingEvent;
            $this->selectedDate = Carbon::parse($upcomingEvent->start_date)->format('Y-m-d');
            $this->events = [$upcomingEvent];
        }
    }

    public function openEventDetails(Event $event)
    {
        $this->dispatch('openEventDetails', id: $event->id);
    }

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
