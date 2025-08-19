<div>
    <div class="rounded-full overflow-hidden aspect-square max-h-[200px] border-6 border-emerald-600 hover:border-emerald-800 cursor-pointer" alt="helista"
        wire:click="showPhoneNumberModal">
        <x-ionicon-call-sharp class="text-emerald-600 hover:text-emerald-800 w-20 h-20 p-2" />
    </div>
    <div class="{{ $showModal ? 'block' : 'hidden' }}">
        <div class="fixed z-50 inset-0">
            <div class="flex justify-center items-center min-h-screen px-4">
                <div class="z-40 fixed inset-0 bg-emerald-600 opacity-50" wire:click="$set('showModal', false)"></div>

                <div class="z-50 flex flex-col items-center w-1/2 min-h-[350px] bg-white rounded-md">
                    <div class="flex items-center w-full mb-4 bg-lime-100 rounded-md px-4 py-2">
                        <div class="flex flex-col w-full ml-4">
                            <div class="flex items-start justify-between w-full">
                                <h3 class="text-3xl font-bold mb-2 text-emerald-600 mt-1">Kontaktid</h3>
                                <div class="flex justify-end cursor-pointer" wire:click="$set('showModal', false)"><x-bi-x class="h-6 w-6 text-emerald-600 hover:text-emerald-400" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex flex-row text-center mb-4 px-6">
                        <div class="w-1/3 mt-4">
                            <img src="{{ asset('margus.jpg') }}" alt="Margus Suumann" class="w-20 h-20 mx-auto mb-2 rounded-full border-2 border-emerald-600" />
                            <h3 class="font-bold">Margus Suumann</h3>
                            <p>Info ja teavitus (PR)</p>
                            <p>Juhatuse liige</p>
                            <p class="text-emerald-600 font-bold">+372 5667 7235</p>
                        </div>
                        <div class="w-1/3 mt-4">
                            <img src="{{ asset('tauno.jpg') }}" alt="Tauno Kibur" class="w-20 h-20 mx-auto mb-2 rounded-full border-2 border-emerald-600" />
                            <h3 class="font-bold">Tauno Kibur</h3>
                            <p>Info ja koolitused</p>
                            <p>Juhatuse esimees</p>
                            <p class="text-emerald-600 font-bold">+372 5645 0552</p>
                        </div>
                        <div class="w-1/3 mt-4">
                            <img src="{{ asset('tiia.jpg') }}" alt="Tiia Rodi" class="w-20 h-20 mx-auto mb-2 rounded-full border-2 border-emerald-600" />
                            <h3 class="font-bold">Tiia Rodi</h3>
                            <p>Info ja raamatupidamine</p>
                            <p>Juhatuse liige</p>
                            <p class="text-emerald-600 font-bold">+372 5695 3915</p>
                        </div>
                    </div>
                    <div class="bg-lime-100 h-8 w-full mt-auto"></div>
                </div>
            </div>

        </div>
    </div>
</div>