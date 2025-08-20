<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Event;
use Carbon\Carbon;

class RetriitFlowerButtonModal extends Component
{
    public $showModal = false;
    public $nextBigEvent;
    public $event;

    protected $listeners = ['openRetriitFlowerButtonModal' => 'showRetriitFlowerButtonModal'];

    public function showRetriitFlowerButtonModal()
    {
        $this->getNextBigEvent();
        $this->showModal = true;
    }

    protected function getNextBigEvent()
    {
        $this->nextBigEvent = Event::with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'Retriit');
            })
            ->whereDate('start_date', '>=', Carbon::today())
            ->orderBy('start_date', 'asc')
            ->first();
    }

    public function render()
    {
        return view('livewire.retriit-flower-button-modal');
    }
}
