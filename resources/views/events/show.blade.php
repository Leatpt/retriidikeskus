<x-layout>
    <x-slot:heading>
        {{ $event->title }}
    </x-slot:heading>

    <p>
        Kategooria: {{ $category->name }}
    </p>
    <p>
        Algus Kuupäev: {{ $event->start_date }}
    </p>
    <p>
        Lõpp Kuupäev: {{ $event->end_date }}
    </p>
    <p>
        Asukoht: {{ $event->location}}
    </p>

    @can('edit', $event)
        <p class="mt-6">
            <x-button href="/events/{{ $event->id }}/edit">Muuda sündmust</x-button>
        </p>
    @endcan
</x-layout>