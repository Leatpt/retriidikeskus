<?php

namespace App\Livewire\Categories;

use Livewire\Component;
use App\Livewire\Forms\CategoryForm;
use Livewire\Attributes\On;

class Create extends Component
{
    public $showModal = false;
    public CategoryForm $form;

    public function save()
    {
        $this->form->validate();
        $this->form->store();

        session()->flash('message', 'Kategooria edukalt salvestatud!');
        $this->redirect('/categories', navigate: true);
    }

    #[On('openCreate')]
    public function openCreate()
    {
        $this->showModal = true;
    }


    public function render()
    {
        return view('livewire.categories.create');
    }
}
