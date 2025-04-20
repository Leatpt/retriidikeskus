<?php

namespace App\Livewire\Events;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Category;

class Create extends Component
{
    public $showModal = false;
    public $categories = [];

    public function mount()
    {
        $this->categories = Category::all();
    }

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
