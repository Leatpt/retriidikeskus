<div>
    <div class="{{ $showRegisterModal ? 'block' : 'hidden' }}">
        <div class="fixed z-50 inset-0">
            <div class="flex justify-center items-center min-h-screen px-4">
                <div class="z-40 fixed inset-0 bg-black opacity-50"
                    wire:click="$set('showRegisterModal', false)"></div>

                <div class="z-50 flex flex-col w-7/8 sm:max-w-[650px] min-h-[50vh] bg-white rounded-md">
                    <div class="flex items-center w-full mb-4 bg-rose-100 rounded-md px-4 py-2">
                        <h3 class="text-3xl font-bold mb-2 text-rose-600 mt-1">Registreeri</h3>
                        <div class="flex justify-end cursor-pointer" wire:click="$set('showRegisterModal', false)">
                            ✕
                        </div>
                    </div>

                    <form class="flex flex-col w-full h-full" wire:submit.prevent="register">
                        <div class="w-full flex flex-col text-start px-4 mb-4">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nimi</label>
                            <input type="text" id="name" class="block p-2.5 w-full text-sm rounded-lg border border-gray-300"
                                wire:model="name">
                            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 mt-2">E-mail</label>
                            <input type="email" id="email" class="block p-2.5 w-full text-sm rounded-lg border border-gray-300"
                                wire:model="email">
                            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div class="bg-rose-100 h-16 w-full flex justify-center items-center">
                            <button type="submit" class="px-4 py-2 text-white font-bold bg-rose-500 rounded-full hover:bg-rose-600">
                                Saada registreerimine
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>