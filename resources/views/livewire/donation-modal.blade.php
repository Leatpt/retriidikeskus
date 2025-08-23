<div>
    <div class="inline-flex flex-row align-right mt-6 uppercase bg-emerald-600 text-white font-bold rounded-full px-4 py-2 hover:bg-emerald-700 cursor-pointer drop-shadow-[5px_5px_0px_rgba(0,85,59,1)] hover:drop-shadow-[7px_7px_0px_rgba(0,92,64,1)] transition duration-300"
        alt="toeta"
        wire:click="showDonationModal">
        <x-coolicon-heart-01 class="w-8 h-8 mr-2 cursor-pointer" />
        <button class="uppercase cursor-pointer">Toeta Oru Rahvaõpistu Tegemisi</button>
    </div>
    <div class="{{ $showModal ? 'block' : 'hidden' }}">
        <div class="fixed z-50 inset-0">
            <div class="flex justify-center items-center min-h-screen px-4">
                <div class="z-40 fixed inset-0 bg-emerald-600 opacity-50" wire:click="$set('showModal', false)"></div>

                <div class="z-50 flex flex-col items-center w-7/8 sm:w-1/2 min-h-[350px] bg-white rounded-md">
                    <div class="flex items-center w-full mb-4 bg-lime-100 rounded-md px-4 py-2">
                        <div class="flex flex-col w-full ml-4">
                            <div class="flex items-start justify-between w-full">
                                <h3 class="text-3xl font-bold mb-2 text-emerald-600 mt-1">Toetused</h3>
                                <div class="flex justify-end cursor-pointer" wire:click="$set('showModal', false)"><x-bi-x class="h-6 w-6 text-emerald-600 hover:text-emerald-400" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex flex-row text-center mb-4 px-6">
                        <div class="bg-white rounded-xl p-6 text-gray-800">
                            <h2 class="text-2xl font-bold text-emerald-700 mb-4">Annetuse pangaandmed</h2>

                            <p class="mb-2"><span class="font-semibold">Saaja nimi:</span> Eesti Evangeelse Luterliku Kiriku Tuhala Kaarli kogudus</p>
                            <p class="mb-2"><span class="font-semibold">IBAN:</span> EE537700771001980241</p>
                            <p class="mb-4"><span class="font-semibold">Selgitus:</span> Annetus</p>
                            <img src="{{ asset('donationThankYou.svg') }}" alt="thank you" class="w-80 mx-auto mt-2" />

                        </div>
                    </div>
                    <div class="bg-lime-100 h-8 w-full mt-auto"></div>
                </div>
            </div>

        </div>
    </div>
</div>