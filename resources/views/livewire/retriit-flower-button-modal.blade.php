<div>
    <div>
        <div class="w-60 h-60 pointer-events-none absolute bottom-16 sm:bottom-10 right-2 sm:right-10 z-15 flex items-center justify-center">
            <img class="w-50 h-50 sm:w-60 sm:h-60 animate-[spin_9s_infinite]" src="{{ asset('flower.svg') }}" alt="flowerOutline">
        </div>

        <button class="cursor-pointer bg-lime-200 border-solid border-4 border-gray-800 rounded-full w-32 h-32 absolute bottom-24 right-12 sm:right-24 z-20 flex flex-col items-center justify-center text-gray-800 hover:bg-rose-400 transition duration-300 text-xl font-bold transform hover:scale-110"
            wire:click="showRetriitFlowerButtonModal">
            Retriidile
        </button>

        <div class="{{ $showModal ? 'block' : 'hidden' }}">
            @if ($showModal && $nextBigEvent)
            <div class="fixed z-50 inset-0">
                <div class="flex justify-center items-center min-h-screen px-4">
                    <div class="z-40 fixed inset-0 bg-emerald-600 opacity-50" wire:click="$set('showModal', false)"></div>
                    <div class="z-50 flex flex-col items-center justify-between w-1/2 max-h-[50vh] bg-white rounded-md">
                        <div class="flex items-center w-full mb-4 bg-lime-100 rounded-md px-4 py-2">
                            <div class="w-40 flex-initial overflow-hidden mr-6">
                                <img
                                    src="{{ asset('eventBird.svg') }}"
                                    alt="Event Image"
                                    class="pointer-events-none w-full h-full object-cover object-center">
                            </div>
                            <div class="flex flex-col w-full">
                                <div class="flex items-start justify-between w-full">
                                    <h3 class="text-3xl font-semibold mb-2">{{ $nextBigEvent->title }}</h3>
                                    <div class="flex justify-end cursor-pointer" wire:click="$set('showModal', false)"><x-bi-x class="h-6 w-6 hover:text-gray-500" /></div>
                                </div>
                                <div class="flex gap-x-8 w-full text-emerald-600 text-center">
                                    <div class="flex w-2/6 items-center justify-start">
                                        <div class="flex flex-col items-center justify-start mr-2">
                                            <x-coolicon-calendar-days class="h-5 w-5 mb-2" />
                                            <x-coolicon-clock class="h-5 w-5" />
                                        </div>
                                        <div class="flex flex-col items-start text-left justify-center">
                                            <div class="font-semibold">{{ \Carbon\Carbon::parse($nextBigEvent->start_date)->format('d.m') }}
                                                @if ($nextBigEvent->start_date != $nextBigEvent->end_date)
                                                - {{ \Carbon\Carbon::parse($nextBigEvent->end_date)->format('d.m') }}
                                                @endif
                                            </div>
                                            <div class="mt-1">{{ \Carbon\Carbon::parse($nextBigEvent->start_time)->format('H:i') }}
                                                @if ($nextBigEvent->start_time != $nextBigEvent->end_time)
                                                - {{ \Carbon\Carbon::parse($nextBigEvent->end_time)->format('H:i') }}
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
                                            <div class="font-semibold">{{ $nextBigEvent->location }}
                                            </div>
                                            <div class="mt-1">{{ $nextBigEvent->category->name }}
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="w-full mb-4 px-6">
                            <p class="text-sm text-gray-700">{{ $nextBigEvent->description }}</p>
                        </div>

                        <div class="w-full flex justify-end gap-4 p-6 bg-rose-100">
                            <button class="px-4 py-2 bg-rose-500 text-white rounded-md hover:bg-rose-600 cursor-pointer">Registreeri</button>
                            <button class="px-4 py-2 bg-whitetext-gray-700 rounded-md hover:bg-gray-100 cursor-pointer"
                                wire:click="$set('showModal', false)">Sulge</button>
                        </div>
                    </div>
                </div>
                @else
                <p>No event details available.</p>
                @endif
            </div>
        </div>
    </div>