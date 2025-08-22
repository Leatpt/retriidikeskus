<?php

namespace App\Livewire\Events;

use App\Livewire\Forms\EventForm;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Category;



class Create extends Component
{
    public $showModal = false;
    public $categories = [];
    public EventForm $form;


    public function mount()
    {
        $this->categories = Category::all();
        $this->form->start_time = '12:00';
        $this->form->end_time = '12:00';
        $this->form->dates[0]['start_date'] = today()->format('Y-m-d');
        $this->form->dates[0]['end_date']   = today()->format('Y-m-d');
    }

    public function save()
    {
        $this->form->validate();
        foreach ($this->form->dates as $range) {
            $this->form->store($range);
        }

        session()->flash('message', 'Sündmused edukalt salvestatud!');
        $this->redirect('/events', navigate: true);
    }

    #[On('openCreate')]
    public function openCreate()
    {
        $this->showModal = true;
    }

    public function addDate()
    {
        $this->form->dates[] = ['start_date' => null, 'end_date' => null];
    }

    public function removeDate($index)
    {
        unset($this->form->dates[$index]);
        $this->form->dates = array_values($this->form->dates);
    }


    public function render()
    {
        return view('livewire.events.create');
    }
}
