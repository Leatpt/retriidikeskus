<?php

namespace App\Livewire\Forms;

use App\Models\Category;
use Livewire\Form;

class CategoryForm extends Form
{
    public ?Category $category;
    public $name;

    protected function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
        ];
    }

    public function store()
    {
        Category::create([
            'name' => $this->name,
        ]);

        session()->flash('message', 'Sündmus edukalt salvestatud!');
    }

    protected function messages(): array
    {
        return [
            'name.required' => 'Kohustuslik väli.',
        ];
    }

    public function render()
    {
        return view('livewire.forms.category-form');
    }
}
