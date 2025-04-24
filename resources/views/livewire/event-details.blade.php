<div>
    @if ($selectedDate && count($events) > 0)
    <h3 class="text-lg font-semibold">Toimumisaeg: {{ date('F j, Y', strtotime($selectedDate)) }}</h3>
    <ul class="list-disc list-inside">
        @foreach ($events as $event)
        <li>{{ $event->title }}</li>
        <li>{{ $event->description }}</li>
        @endforeach
    </ul>
    @else
    <p>No upcoming events.</p>
    @endif
</div>