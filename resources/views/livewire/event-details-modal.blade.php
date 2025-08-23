<div class="{{ $showModal ? 'block' : 'hidden' }}">
    <div class="fixed z-30 inset-0">
        <div class="flex justify-center items-center min-h-screen px-4">
            <div class="z-30 fixed inset-0 bg-emerald-600 opacity-50" wire:click="$set('showModal', false)"></div>

            @if ($event)

            <div class="z-40 flex flex-col items-center justify-between w-1/2 min-h-[50vh] bg-white rounded-md">
                <div class="flex items-center w-full mb-4 bg-lime-100 rounded-md px-4 py-2">
                    <div class="w-40 flex-initial overflow-hidden mr-6">
                        <img
                            src="{{ asset('eventBird.svg') }}"
                            alt="Event Image"
                            class="pointer-events-none w-full h-full object-cover object-center">
                    </div>
                    <div class="flex flex-col w-full">
                        <div class="flex items-start justify-between w-full">
                            <h3 class="text-3xl font-semibold mb-2">{{ $event->title }}</h3>
                            <div class="flex justify-end cursor-pointer" wire:click="$set('showModal', false)"><x-bi-x class="h-6 w-6 hover:text-gray-500" /></div>
                        </div>
                        <div class="flex gap-x-8 w-full text-emerald-600 text-center">
                            <div class="flex w-2/6 items-center justify-start">
                                <div class="flex flex-col items-center justify-start mr-2">
                                    <x-coolicon-calendar-days class="h-5 w-5 mb-2" />
                                    <x-coolicon-clock class="h-5 w-5" />
                                </div>
                                <div class="flex flex-col items-start text-left justify-center">
                                    <div class="font-semibold">{{ \Carbon\Carbon::parse($event->start_date)->format('d.m') }}
                                        @if ($event->start_date != $event->end_date)
                                        - {{ \Carbon\Carbon::parse($event->end_date)->format('d.m') }}
                                        @endif
                                    </div>
                                    <div class="mt-1">{{ \Carbon\Carbon::parse($event->start_time)->format('H:i') }}
                                        @if ($event->start_time != $event->end_time)
                                        - {{ \Carbon\Carbon::parse($event->end_time)->format('H:i') }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="flex w-4/6 space-x-0">
                                <div class="flex w-1/6 flex-col items-center justify-center">
                                    <x-coolicon-map-pin class="h-5 w-5 mb-2 " />
                                    <x-bi-journal-bookmark-fill class="h-5 w-5" />
                                </div>
                                <div class="flex w-5/6 flex-col items-start justify-start content-start">
                                    <div class="font-semibold">{{ $event->location }}
                                    </div>
                                    <div class="mt-1">{{ $event->category->name }}
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="w-full mb-4 px-6 flex flex-col">
                    @if ($event->paid === true)
                    <p class="text-sm font-bold text-emerald-700 mb-2">Retriidi osalustasu on {{ $event->price }}€. <span class="text-sm font-semibold text-gray-700 mb-2">Sisaldab ööbimist ja söögikordi.</span></p>
                    <p class="text-sm text-gray-700">{{ $event->description }}</p>
                    @else
                    <p class="text-sm text-gray-700">{{ $event->description }}</p>
                    @endif
                </div>

                <div class="w-full flex justify-end gap-4 p-6 bg-rose-100">
                    @if ($event->category->name === 'Retriit')
                    <button class="px-4 py-2 bg-rose-500 text-white rounded-md hover:bg-rose-600 cursor-pointer">Registreeri</button>
                    <button class="px-4 py-2 bg-whitetext-gray-700 rounded-md hover:bg-gray-100 cursor-pointer"
                        wire:click="$set('showModal', false)">Sulge</button>
                    @else
                    <button class="px-4 py-2 bg-whitetext-gray-700 rounded-md hover:bg-gray-100 cursor-pointer"
                        wire:click="$set('showModal', false)">Sulge</button>
                    @endif
                </div>
            </div>


            @else
            <p>No event details available.</p>
            @endif

        </div>

    </div>
</div>