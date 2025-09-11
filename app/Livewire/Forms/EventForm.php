<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use Livewire\Form;
use Illuminate\Validation\Rule;


class EventForm extends Form
{
    public ?Event $event;
    public $title;
    public $location;
    public $description;
    public $paid = false;
    public $price = null;
    public $dates = [
        ['start_date' => null, 'end_date' => null],
    ];
    public $start_time;
    public $end_time;
    public $category_id;


    protected function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'location' => 'required|string|in:oruMois,tuhalaKirik',
            'description' => 'nullable|string',
            'paid' => 'required|boolean',
            'price' => 'required_if:paid,true|nullable|numeric|min:0',
            'dates' => 'array|min:1',
            'dates.*.start_date' => 'required|date',
            'dates.*.end_date' => 'nullable|date|after_or_equal:dates.*.start_date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => [
                'nullable',
                'date_format:H:i',
                Rule::when(
                    $this->dates[0]['start_date'] === $this->dates[0]['end_date'],
                    ['after:start_time']
                ),
            ],
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function setEvent(Event $event): void
    {
        $this->event = $event;
        $this->title = $event->title;
        $this->location = $event->location;
        $this->description = $event->description;
        $this->paid = $event->paid;
        $this->price = $event->price;
        $this->start_time = $event->start_time;
        $this->end_time = $event->end_time;
        $this->category_id = $event->category_id;
        $this->dates = [
            [
                'start_date' => $event->start_date
                    ? \Carbon\Carbon::parse($event->start_date)->format('Y-m-d')
                    : null,
                'end_date' => $event->end_date
                    ? \Carbon\Carbon::parse($event->end_date)->format('Y-m-d')
                    : null,
            ]
        ];
    }

    public function store(array $range)
    {
        Event::create([
            'title' => $this->title,
            'location' => $this->location,
            'description' => $this->description,
            'paid' => $this->paid,
            'price' => $this->price,
            'start_date' => $range['start_date'],
            'end_date' => $range['end_date'],
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

        $range = $this->dates[0] ?? ['start_date' => null, 'end_date' => null];

        $this->event->update([
            'title' => $this->title,
            'location' => $this->location,
            'description' => $this->description,
            'paid' => $this->paid,
            'price' => $this->price,
            'start_date' => $range['start_date'],
            'end_date' => $range['end_date'],
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'category_id' => $this->category_id,
        ]);
        session()->flash('message', 'Sündmus edukalt uuendatud!');
    }

    protected function messages(): array
    {
        return [
            'title.required' => 'Pealkiri on kohustuslik.',
            'price.required_if' => 'Kirjuta hind.',
            'dates.*.start_date.required' => 'Alguskuupäev on kohustuslik.',
            'dates.*.end_date.after_or_equal' => 'Lõppkuupäev ei tohi olla enne alguskuupäeva.',
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
            'paid' => 'tasuline',
            'price' => 'hind',
            'description' => 'kirjeldus',
            'start_date' => 'alguskuupäev',
            'end_date' => 'lõppkuupäev',
            'start_time' => 'algusaeg',
            'end_time' => 'lõppaeg',
            'category_id' => 'kategooria',
        ];
    }
}
