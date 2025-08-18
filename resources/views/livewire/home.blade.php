<div>
    <div class="bg-rose-100 relative overflow-hidden">
        <div class="min-h-screen relative bg-lime-50 text-white rounded-br-full overflow-hidden">
            <img
                src="{{ asset('oruMainPicture.jpg') }}"
                alt="welcomeImage"
                class="absolute inset-0 w-full h-full object-cover z-0">
            <div class="absolute inset-0 z-10 pointer-events-none rounded-br-full shadow-[inset_-20px_-20px_40px_rgba(0,0,0,0.9)]"></div>
            <div class="relative z-10 flex items-center justify-center h-full">
                <h1 class="text-3xl font-bold text-gray-700">Welcome</h1>
            </div>
        </div>
        <div class="pointer-events-none absolute bottom-10 right-10 z-0 flex items-center justify-center">
            <img class="w-60 h-60 animate-[spin_9s_infinite]" src="{{ asset('flower.svg') }}" alt="flowerOutline">
        </div>

        <button class="bg-lime-200 border-solid border-4 border-gray-800 rounded-full w-32 h-32 absolute bottom-24 right-24 z-10 flex flex-col items-center justify-center text-gray-800 hover:bg-rose-400 transition duration-300 text-xl font-bold transform hover:scale-110">
            Retriidile
        </button>
    </div>

    <div id="kuukava" class="pt-20 bg-rose-100 text-gray-700 py-16 -mt-44">
        <div class="mt-32">
            <h1 class="flex items-center justify-center mb-8 text-3xl text-gray-700 font-bold">Tulevad sündmused</h1>
        </div>

        <div
            class="flex flex-row items-center justify-center gap-6 w-full mb-12">
            <div class="flex flex-row items-center justify-center gap-6 w-full mb-12">
                <div class="wheel-left relative w-96 h-96">
                    <div class="relative flex items-center justify-center rounded-full bg-white w-96 h-96 z-10 ">
                        <div class="overflow-auto w-full h-full flex items-center justify-center p-4">
                            <livewire:calendar />
                        </div>
                    </div>
                </div>
                <div class="wheel-right relative w-96 h-96">
                    <div class="relative flex items-center justify-center rounded-full bg-white w-96 h-96 z-10">
                        <div class="overflow-auto w-full h-full flex items-center justify-center p-4 w-5/6 h-5/6 rounded-full">
                            <livewire:event-details />
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="bg-rose-100">
            <div class="bg-lime-100 py-16 rounded-tr-full min-h-screen rounded-br-full">
                <div id="meist" class="container mx-auto px-4 py-16 -mt-44">
                    <div class="mt-32">
                        <h2 class="text-3xl font-bold mb-4">Meist</h2>
                        <p class="text-lg leading-relaxed">
                            Sihtasutus Oru Evangeelne Rahvaõpistu (reg. nr. 90014856) on asutanud EELK Tuhala Kaarli kogudus (reg. nr. 80210154). Rahvaõpistu ehk koolituskeskuse põhisuunaks on kristliku süvatraditsiooni tutvustamine läbi erinevate õpikodade: KASVU-ÕPIKODA, VAIKUSE ÕPIKODA (retriit), VAIKUSE RÄNNAK, laagrid, teemapäevadd, talgud ja töötoad…
                            RAHVAÕPISTU on asutatud Tuhala kogudusele kuuluva Oru mõisa kordategemiseks ja korrashoidmiseks.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>