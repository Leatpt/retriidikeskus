<?php

namespace App\Livewire\Events;

use App\Models\Category;
use Livewire\Component;

class Create extends Component
{
    public function create()
    {
        $categories = Category::all();
        return view('livewire.events.create');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.events.create');
    }
}
