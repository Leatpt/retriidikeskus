<div>
    <div class="bg-rose-100 relative overflow-hidden">
        <div class="min-h-screen flex items-center justify-center bg-lime-50 text-white rounded-br-full">
            <div class="text-center w-full text-gray-900">
                <h1 class="text-5xl font-bold">Welcome to My Website</h1>
                <p class="mt-4 text-lg">Scroll down to learn more</p>
            </div>
        </div>
        <div class="pointer-events-none absolute bottom-10 right-10 z-0 flex items-center justify-center">
            <img class="w-60 h-60 animate-[spin_9s_infinite]" src="{{ asset('flower.svg') }}" alt="flowerOutline">
        </div>

        <button class="bg-lime-200 border-solid border-4 border-gray-800 rounded-full w-32 h-32 absolute bottom-24 right-24 z-10 flex flex-col items-center justify-center text-gray-800 hover:bg-rose-400 transition duration-300 text-xl font-bold transform hover:scale-110">
            Retriidile
        </button>
    </div>

    <div id="kuukava" class="bg-rose-100 text-gray-800 py-16">
        <div>
            <h1 class="flex items-center justify-center mb-8">Tulevad sündmused</h1>
        </div>

        <div
            class="flex flex-row items-center justify-center gap-6 w-full mb-12">
            <div class="wheel-left">
                <div
                    class="flex items-center justify-center rounded-full bg-white shadow-lg w-96 h-96">
                    <div class="overflow-auto w-full h-full flex items-center justify-center p-4">
                        <livewire:calendar />
                    </div>
                </div>
            </div>
            <div class="wheel-right">
                <div

                    class="flex items-center justify-center rounded-full bg-white shadow-lg w-96 h-96">
                    <div class="overflow-auto w-full h-full flex items-center justify-center p-4 w-5/6 h-5/6 border-4 border-lime-200 border-dotted rounded-full">
                        <livewire:event-details />
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-rose-100">
            <div class="bg-lime-100 py-16 rounded-tr-full min-h-screen rounded-br-full">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold mb-4">Our Services</h2>
                    <p class="text-lg leading-relaxed">
                        Another section with more content.
                    </p>
                </div>
            </div>
        </div>
    </div>