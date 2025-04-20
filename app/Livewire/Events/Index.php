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


    public function openCreate()
    {
        $this->showModal = true;
        return view('livewire.events.create', [
            'events' => Event::with('category')->paginate(10),
        ]);
    }

    public function render()
    {
        return view('livewire.events.index', [
            'events' => Event::with('category')->paginate(10),
        ]);
    }
}
