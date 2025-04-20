<?php

namespace App\Livewire\Events;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\On;

class Create extends Component
{
    public $showModal = false;


    #[On('openModal')]
    public function openCreate()
    {
        $this->showModal = true;
    }

    public function closeCreate()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.events.create');
    }
}
