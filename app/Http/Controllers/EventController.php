<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with('category')->orderBy('start_date', 'asc')->simplePaginate(10);

        return view('events.index', [
            'events' => $events
        ]);
    }

    public function create(Category $categories, Event $event)
    {
        $categories = Category::all();

        return view('events.create', [
            'categories' => $categories,
            'event' => $event
        ]);
    }

    public function show(Event $event)
    {
        $category = $event->category;

        return view('events.show', ['event' => $event, 'category' => $category]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'start_date' => ['required'],
            'start_time' => ['required'],
            'category_id' => ['required']
        ]);

        $event = Event::create([
            'title' => request('title'),
            'description' => request('description'),
            'start_date' => request('start_date'),
            'end_date' => request('end_date'),
            'start_time' => request('start_time'),
            'end_time' => request('end_time'),
            'category_id' => request('category_id'),
            'user_id' => 1
        ]);

        return redirect('/events');
    }

    public function edit(Event $event, Category $categories)
    {
        $categories = Category::all();

        return view('events.edit', ['event' => $event, 'categories' => $categories]);
    }

    public function update(Event $event)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'start_date' => ['required'],
            'start_time' => ['required'],
            'category_id' => ['required']
        ]);

        $event->update([
            'title' => request('title'),
            'description' => request('description'),
            'start_date' => request('start_date'),
            'end_date' => request('end_date'),
            'start_time' => request('start_time'),
            'end_time' => request('end_time'),
            'category_id' => request('category_id'),
            'user_id' => 1
        ]);

        return redirect('/events');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect('/events');
    }
}
