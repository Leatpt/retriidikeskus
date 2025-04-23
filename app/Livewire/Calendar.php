<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Event;

class Calendar extends Component
{
    public $month;
    public $year;
    public $selectedDate;
    public $events = [];

    public function mount()
    {
        $this->month = date('m');
        $this->year = date('Y');
    }

    public function getEventsForDate($date)
    {
        $this->selectedDate = $date;
        $this->events = Event::whereDate('start_date', $date)->get();
        $this->dispatch('dateSelected', $date);
    }

    public function isActive($date)
    {
        return $this->selectedDate === $date;
    }


    public function render()
    {
        $calendar = [];

        $firstDay = Carbon::create($this->year, $this->month, 1);
        $lastDay = $firstDay->copy()->endOfMonth();

        $startDate = $firstDay->copy()->startOfWeek(Carbon::SUNDAY);
        $endDate = $lastDay->copy()->endOfWeek(Carbon::SATURDAY);

        $currentDate = $startDate->copy();

        $eventDates = Event::whereMonth('start_date', $this->month)
            ->whereYear('start_date', $this->year)
            ->pluck('start_date')
            ->map(fn($date) => Carbon::parse($date)->format('Y-m-d'))
            ->toArray();


        while ($currentDate <= $endDate) {
            $week = [];

            for ($i = 0; $i < 7; $i++) {
                $week[] = [
                    'day' => $currentDate->day,
                    'date' => $currentDate->format('Y-m-d'),
                    'currentMonth' => $currentDate->month == $this->month,
                    'hasEvent' => in_array($currentDate->format('Y-m-d'), $eventDates),
                ];
                $currentDate->addDay();
            }

            $calendar[] = $week;
        }

        return view('livewire.calendar', [
            'calendar' => $calendar,
            'selectedDate' => $this->selectedDate,
            'events' => $this->events,
        ]);
    }
}
