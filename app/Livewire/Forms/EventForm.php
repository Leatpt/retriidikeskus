<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use Livewire\Form;

class EventForm extends Form
{
    public ?Event $event;

    #[Validate('required|string|max:255')]
    public $title;

    #[Validate('nullable|string|max:255')]
    public $location;

    #[Validate('nullable|string')]
    public $description;

    #[Validate('required|date')]
    public $start_date;

    #[Validate('nullable|date|after_or_equal:start_date')]
    public $end_date;

    #[Validate('required|date_format:H:i')]
    public $start_time;

    #[Validate('nullable|date_format:H:i')]
    public $end_time;

    #[Validate('required|exists:categories,id')]
    public $category_id;

    public function setEvent(Event $event): void
    {
        $this->event = $event;
        $this->title = $event->title;
        $this->location = $event->location;
        $this->description = $event->description;
        $this->start_date = $event->start_date;
        $this->end_date = $event->end_date;
        $this->start_time = $event->start_time;
        $this->end_time = $event->end_time;
        $this->category_id = $event->category_id;
    }

    public function store()
    {
        Event::create([
            'title' => $this->title,
            'location' => $this->location,
            'description' => $this->description,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'category_id' => $this->category_id,
            'user_id' => Auth::id(),
        ]);

        session()->flash('message', 'Sündmus edukalt salvestatud!');
    }

    public function update()
    {
        $this->validate();
        $this->event->update(
            $this->only([
                'title',
                'location',
                'description',
                'start_date',
                'end_date',
                'start_time',
                'end_time',
                'category_id',
            ]),
        );
        session()->flash('message', 'Sündmus edukalt uuendatud!');
    }

    protected function messages(): array
    {
        return [
            'title.required' => 'Pealkiri on kohustuslik.',
            'start_date.required' => 'Alguskuupäev on kohustuslik.',
            'end_date.after_or_equal' => 'Lõppkuupäev ei tohi olla enne alguskuupäeva.',
            'start_time.required' => 'Algusaeg on kohustuslik.',
            'end_time.after' => 'Lõppaeg peab olema hilisem kui algusaeg.',
            'category_id.required' => 'Palun vali kategooria.',
            'category_id.exists' => 'Valitud kategooria ei ole kehtiv.',
        ];
    }

    protected function validationAttributes(): array
    {
        return [
            'title' => 'pealkiri',
            'location' => 'asukoht',
            'description' => 'kirjeldus',
            'start_date' => 'alguskuupäev',
            'end_date' => 'lõppkuupäev',
            'start_time' => 'algusaeg',
            'end_time' => 'lõppaeg',
            'category_id' => 'kategooria',
        ];
    }
}
