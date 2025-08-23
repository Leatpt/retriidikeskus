    <div class="{{ $showModal ? 'block' : 'hidden' }}">
        <div class="fixed z-50 inset-0">
            <div class="flex justify-center items-center min-h-screen px-4">
                <div class="z-40 fixed inset-0 bg-emerald-600 opacity-50" wire:click="$set('showModal', false)"></div>
                <div class="z-50 w-3/4 md:max-w-[500px] bg-white rounded-lg shadow-lg p-6" wire:click.stop>
                    <form class="w-full" wire:submit="save">
                        @csrf

                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10">
                                <div class="flex-1 justify-center">
                                    <div class="mb-4">
                                        <x-form-field>
                                            <x-form-label for="name" wire:dirty.class="text-amber-600" wire:target="form.name">Kategooria</x-form-label>
                                            <span class="text-amber-600" wire:dirty wire:target="form.name">*</span>

                                            <div class="mt-2">
                                                <x-form-input name="name" id="name" type="text" required wire:model="form.name" />

                                                <x-form-error name="form.name" />
                                            </div>
                                        </x-form-field>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="button" class="text-sm font-semibold leading-6 text-gray-900 cursor-pointer" wire:click="$set('showModal', false)">Tühista</button>
                            <x-form-button type="submit">Salvesta</x-form-button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>