    <div class="w-full h-full rounded-full overflow-hidden flex flex-col border-2 border-lime-200 border-dotted">
        <div class="w-full h-1/2 overflow-hidden">
            <img
                src="{{ asset('eventImage1.svg') }}"
                alt="Event Image"
                class="w-full h-full object-cover object-top">
        </div>

        <div class="w-full h-1/2 flex flex-col items-center text-center p-2 bg-white">
            @if ($selectedDate && count($events) > 0)

            <div class="">
                @foreach ($events as $event)
                <div>
                    <h3 class="text-lg font-semibold mt-2">
                        {{ mb_convert_case(\Carbon\Carbon::parse($selectedDate)->translatedFormat('j. F'), MB_CASE_TITLE, "UTF-8") }} - {{ $event->title }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-600">{{ \Str::limit($event->description, 120) }}</p>
                    <button class="mt-3 border-2 border-lime-300 hover:border-lime-400 rounded-3xl px-3 text-lime-500 hover:text-lime-600 transform hover:scale-110">Loe Edasi</button>
                </div>
                @endforeach
            </div>
            @else
            <p>No upcoming events.</p>
            @endif
        </div>

    </div>