<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('components.layouts.app')]
class Index extends Component
{
    use WithPagination;
    public $showModal = false;

    public function addCategory()
    {
        $this->dispatch('openCreate');
    }

    public function delete(Category $category)
    {
        $category->delete();
        unset($this->categories);
        session()->flash('message', 'Kategooria edukalt kustutatud.');
    }

    public function render()
    {
        return view('livewire.categories.index', [
            'categories' => Category::all(),
        ]);
    }
}
