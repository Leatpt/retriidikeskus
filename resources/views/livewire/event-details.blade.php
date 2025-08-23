    <div class="w-full h-full rounded-full overflow-hidden flex flex-col border-2 border-rose-200 border-dotted">
        <div class="w-full h-1/2 overflow-hidden">
            <img
                src="{{ asset('eventImage1.svg') }}"
                alt="Event Image"
                class="w-full h-full object-cover object-top">
        </div>
        @livewire('event-details-modal')
        <div class="w-full h-1/2 flex flex-col items-center text-center p-2 bg-white">
            @if ($selectedDate && count($events) > 0)

            <div class="">
                @foreach ($events as $event)
                <div>

                    <h3 class="text-lg font-semibold mt-2">
                        {{ mb_convert_case(\Carbon\Carbon::parse($selectedDate)->translatedFormat('j. F'), MB_CASE_TITLE, "UTF-8") }} - {{ $event->title }}
                    </h3>
                    <p class="mt-2 mb-2 text-sm text-gray-600 px-2">{{ \Str::limit($event->description, 120) }}</p>
                    <button
                        class="cursor-pointer border-1 border-rose-500 hover:border-rose-700 rounded-3xl px-3 font-semibold text-rose-500 hover:text-rose-700 transform hover:scale-110"
                        wire:click="openEventDetails({{ $event->id }})">Loe Edasi</button>
                </div>
                @endforeach
            </div>
            @else
            <p>No upcoming events.</p>
            @endif
        </div>

    </div>