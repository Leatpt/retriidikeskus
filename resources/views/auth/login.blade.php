<x-layouts.app>
    <form method="POST" action="/login" class="max-w-sm mx-auto">
        @csrf

        <div class="mb-5 mt-12 bg-white flex items-center justify-center rounded-xl border-2 border-gray-700 border-dotted">
            <div class="border-b border-gray-900/10 pb-12 w-full max-w-md p-6">
                <div class="grid grid-cols-1 gap-y-8">
                    <x-form-field>
                        <x-form-label for="username">Kasutaja</x-form-label>
                        <div class="mt-2 bg-lime-50">
                            <x-form-input name="username" id="username" type="text" :value="old('username')" required />
                            <x-form-error name="username" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Parool</x-form-label>
                        <div class="mt-2 bg-lime-50">
                            <x-form-input name="password" id="password" type="password" required />
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>


        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Tühista</a>
            <x-form-button>Logi Sisse</x-form-button>
        </div>
    </form>
</x-layouts.app>