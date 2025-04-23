<div>
    <div class="bg-rose-100">
        <div class="min-h-screen flex items-center justify-center bg-lime-50 text-white rounded-br-full">
            <div class="text-center w-full text-gray-900">
                <h1 class="text-5xl font-bold">Welcome to My Website</h1>
                <p class="mt-4 text-lg">Scroll down to learn more</p>
            </div>
        </div>
    </div>

    <div id="kuukava" class="bg-rose-100 text-gray-800 py-16">
        <div
            class="relative w-full h-32 -mt-20 z-5">
            <svg viewBox="0 0 800 200" class="absolute w-full h-full">
                <defs>
                    <path
                        id="curvePath"
                        d="M 0,200 C 400,0 800,0 800,200"
                        fill="transparent" />
                </defs>
                <text font-size="42" fill="#1f2937" font-weight="bold" text-anchor="middle" class="uppercase">
                    <textPath href="#curvePath" startOffset="50%">
                        Tulevad sündmused
                    </textPath>
                </text>
            </svg>
        </div>

        <div
            class="flex flex-row items-center justify-center gap-6 w-full mb-12">
            <div
                class="flex items-center justify-center rounded-full bg-white shadow-lg w-96 h-96">
                <div class="overflow-auto w-full h-full flex items-center justify-center p-4">
                    <livewire:calendar />
                </div>
            </div>

            <div

                class="flex items-center justify-center rounded-full bg-white shadow-lg w-96 h-96">
                <div class="overflow-auto w-full h-full flex items-center justify-center p-4 w-5/6 h-5/6 border-4 border-lime-200 border-dotted rounded-full">
                    <livewire:event-details />
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