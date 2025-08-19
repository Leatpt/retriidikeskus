<div>
    <div class="rounded-full overflow-hidden aspect-square max-h-[200px] border-6 border-emerald-600 hover:border-emerald-800 cursor-pointer" alt="kirjuta"
        wire:click="showSendEmailModal">
        <x-ionicon-mail class="text-emerald-600 hover:text-emerald-800 w-20 h-20 p-2" />
    </div>
    <div class="{{ $showModal ? 'block' : 'hidden' }}">
        <div class="fixed z-50 inset-0">
            <div class="flex justify-center items-center min-h-screen px-4">
                <div class="z-40 fixed inset-0 bg-emerald-600 opacity-50" wire:click="$set('showModal', false)"></div>

                <div class="z-50 flex flex-col items-center w-1/2 min-h-[50vh] bg-white rounded-md">
                    <div class="flex items-center w-full mb-4 bg-lime-100 rounded-md px-4 py-2">
                        <div class="flex flex-col w-full ml-4">
                            <div class="flex items-start justify-between w-full">
                                <h3 class="text-3xl font-bold mb-2 text-emerald-600 mt-1">Kirjuta meile</h3>
                                <div class="flex justify-end cursor-pointer" wire:click="$set('showModal', false)"><x-bi-x class="h-6 w-6 text-emerald-600 hover:text-emerald-400" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex flex-col text-start mb-4 px-4">
                        <div class="h-1/3 w-full px-4">
                            <form class="mx-auto">
                                <label for="customerName" class="block mb-2 text-sm font-medium text-gray-900">Nimi</label>
                                <input type="text" id="customerName" class="block p-2.5 w-full text-sm text-gray-900 bg-lime-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Mari Maasikas"></input>
                            </form>
                        </div>
                        <div class="h-1/3 w-full px-4 mt-2">
                            <form class="mx-auto">
                                <label for="customerEmail" class="block mb-2 text-sm font-medium text-gray-900">E-mail</label>
                                <input type="email" id="customerEmail" class="block p-2.5 w-full text-sm text-gray-900 bg-lime-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="kasutaja@example.com"></input>
                            </form>
                        </div>
                        <div class="h-1/3 w-full px-4 mt-2">
                            <form class="mx-auto">
                                <label for="customerMessage" class="block mb-2 text-sm font-medium text-gray-900">Sinu sõnum</label>
                                <textarea id="customerMessage" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-lime-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Sõnumi sisu..."></textarea>
                            </form>
                        </div>
                    </div>
                    <div class="bg-lime-100 h-16 w-full mt-auto items-center flex justify-center">
                        <button class="px-4 py-2 text-white font-bold bg-emerald-600 rounded-full hover:bg-emerald-700 cursor-pointer uppercase">Saada Sõnum</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>