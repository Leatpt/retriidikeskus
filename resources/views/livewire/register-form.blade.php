<div>
    @if (session()->has('success'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        x-transition
        class="fixed top-4 left-1/2 transform -translate-x-1/2 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md z-50"
        role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
    @endif

    @if (session()->has('error'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        x-transition
        class="fixed top-4 left-1/2 transform -translate-x-1/2 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-md z-50"
        role="alert">
        <span class="block sm:inline">{{ session('error') }}</span>
    </div>
    @endif

    <div class="{{ $showRegisterModal ? 'block' : 'hidden' }}">
        <div class="fixed z-50 inset-0">
            <div class="flex justify-center items-center min-h-screen px-4">
                <div class="z-40 fixed inset-0 bg-emerald-600 opacity-50"
                    wire:click="$set('showRegisterModal', false)"></div>

                <div class="z-50 flex flex-col justify-between w-7/8 sm:max-w-[650px] min-h-[40vh] bg-white rounded-md">
                    <div class="flex items-center w-full mb-4 bg-rose-100 rounded-md px-4 py-2">
                        <div class="flex flex-col w-full ml-4">
                            <div class="flex items-start justify-between w-full">
                                <h3 class="text-3xl font-bold mb-2 text-rose-600 mt-1">Registreeri</h3>
                                <div class="flex justify-end cursor-pointer"
                                    wire:click="$set('showRegisterModal', false)">
                                    <x-bi-x class="h-6 w-6 text-gray-700 hover:text-gray-600" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <form class="flex flex-col items-center justify-center w-full h-full" wire:submit.prevent="sendRegistrationEmail">
                        <div class="w-full flex flex-col text-start px-8 mb-4">
                            <div class="mt-2 flex flex-col w-full items-start">
                                <p class="mb-2 text-gray-800">
                                    <strong>{{ $eventTitle }}</strong><br>
                                <p class="mb-2">Osalustasu: <strong>{{ $eventPrice }} €</strong><br></p>
                                <p class="mb-4">Kuupäevad: <strong>{{ $eventDates }}</strong><br></p>
                                Palume jätta oma nimi ja e-posti aadress. <br>
                                Kinnituse ja arve saadame Teile kahe tööpäeva jooksul.
                                </p>
                            </div>
                            <div class="flex flex-row w-full justify-between">
                                <div class="w-full mt-4 mb-4 flex flex-col items-start">
                                    <div class="w-full max-w-[330px]">
                                        <label for="registerName" class="block mb-2 text-sm font-medium text-gray-900">Nimi</label>
                                        <input type="text"
                                            id="registerName"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-rose-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                            placeholder="Mari Maasikas"
                                            wire:model="registerName">
                                        </input>
                                        @error('registerName') <span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="w-full max-w-[330px]">
                                        <label for="registerEmail" class="block mt-2 mb-2 text-sm font-medium text-gray-900">E-mail</label>
                                        <input type="text"
                                            id="registerEmail"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-rose-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                            placeholder="kasutaja@example.com"
                                            wire:model="registerEmail"></input>
                                        @error('registerEmail') <span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="hidden md:block">
                                    <img
                                        src="{{ asset('registerPicture.svg') }}"
                                        alt="flowers and stones"
                                        class="w-96">
                                </div>

                            </div>
                        </div>

                        <div class="bg-rose-100 h-16 w-full flex justify-center items-center">
                            <button type="submit"
                                class="px-4 py-2 text-white font-bold bg-rose-500 rounded-full hover:bg-rose-600 cursor-pointer">
                                Saada registreerimine
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>