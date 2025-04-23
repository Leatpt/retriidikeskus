<div>
    @if ($selectedDate && count($events) > 0)
    <h3 class="text-lg font-semibold">Toimumisaeg: {{ date('F j, Y', strtotime($selectedDate)) }}</h3>
    <ul class="list-disc list-inside">
        @foreach ($events as $event)
        <li>{{ $event->title }}</li>
        @endforeach
    </ul>
    @endif
</div>