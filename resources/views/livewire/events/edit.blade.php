<div class="{{ $showModal ? 'block' : 'hidden' }}">
    <div class="fixed z-50 inset-0">
        <div class="flex justify-center items-center min-h-screen px-4">
            <div class="z-40 fixed inset-0 bg-emerald-600 opacity-50" wire:click="$set('showModal', false)"></div>
            <div class="z-50 w-full max-w-3xl bg-white rounded-lg shadow-lg p-6" wire:click.stop>
                <form class="w-full" wire:submit.prevent="save">
                    @csrf

                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="grid grid-cols-1 sm:grid-cols-6 gap-x-6 gap-y-8">
                                <div class="sm:col-span-6">
                                    <x-form-field>
                                        <x-form-label for="title">Pealkiri</x-form-label>

                                        <div class="mt-2">
                                            <x-form-input name="title" id="title" placeholder="Retriit" type="text" required wire:model="form.title" />

                                            <x-form-error name="title" />
                                        </div>
                                    </x-form-field>
                                </div>
                            </div>

                            <div class="mt-8 grid grid-cols-1 sm:grid-cols-6 gap-x-6 gap-y-8">
                                <div class="sm:col-span-6">
                                    <x-form-field>
                                        <x-form-label for="description">Ürituse Kirjeldus</x-form-label>

                                        <div class="mt-2">
                                            <x-form-input name="description" id="description" type="textarea" wire:model="form.description" />

                                            <x-form-error name="description" />
                                        </div>
                                    </x-form-field>
                                </div>
                            </div>

                            <div class="mt-8 grid grid-cols-1 sm:grid-cols-6 gap-x-6 gap-y-8">
                                <div class="sm:col-span-6 flex items-center space-x-4">
                                    <div class="w-2/5">
                                        <x-form-field>
                                            <x-form-label for="location">Asukoht</x-form-label>
                                            <div class="mt-2">
                                                <x-form-input name="location" id="location" type="text" wire:model="form.location" />
                                                <x-form-error name="form.location" />
                                            </div>
                                        </x-form-field>
                                    </div>

                                    <div class="w-1/8 flex">
                                        <label class="mt-8 ml-2 flex items-center space-x-2 cursor-pointer">
                                            <input type="checkbox" name="paid" id="paid"
                                                wire:model="form.paid"
                                                class="h-4 w-4 cursor-pointer">
                                            <x-form-label for="paid">Tasuline</x-form-label>
                                        </label>
                                    </div>

                                    <div class="flex flex-col mt-8">
                                        <div class="flex items-center space-x-2"
                                            x-data="{
                                                    paid: @entangle('form.paid'),
                                                    price: @entangle('form.price'),
                                                }"
                                            x-init="
                                                    $watch('paid', value => {
                                                        if (!value) price = '';
                                                    })
                                                ">
                                            <input
                                                type="number"
                                                name="price"
                                                id="price"
                                                step="any"
                                                x-model="price"
                                                placeholder="30"
                                                :class="paid ? 'w-full max-w-[60px] justify-end' : 'w-full max-w-[60px] opacity-50 cursor-not-allowed justify-end'"
                                                :disabled="!paid" />
                                            <x-form-label for="price">€</x-form-label>
                                        </div>
                                    </div>
                                    <div class="mt-1">
                                        <x-form-error name="form.price" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 grid grid-cols-1 sm:grid-cols-6 gap-x-6 gap-y-8">
                            <div class="sm:col-span-3">
                                <x-form-field>
                                    <x-form-label for="choose_dates">Vali kuupäevad</x-form-label>

                                    <div class="mt-2 flex items-center space-x-2">
                                        <x-form-input id="start_date" name="start_date" type="date" required
                                            class="w-full" wire:model="form.dates.0.start_date" />

                                        <span>-</span>

                                        <x-form-input name="end_date" id="end_date" type="date" class="w-full" wire:model="form.dates.0.end_date" />


                                    </div>
                                </x-form-field>
                                <x-form-error name="form.dates.0.start_date" />
                                <x-form-error name="form.dates.0.end_date" />
                            </div>
                        </div>

                        <div class="mt-8 grid grid-cols-1 sm:grid-cols-6 gap-x-6 gap-y-8">
                            <div class="sm:col-span-3">
                                <x-form-field>
                                    <x-form-label for="choose_times">Vali Kellaajad</x-form-label>

                                    <div class="mt-2 flex items-center space-x-2">
                                        <x-form-input id="start_time" name="start_time" type="time" required wire:model="form.start_time" />

                                        <span>-</span>

                                        <x-form-input name="end_time" id="end_time" type="time" wire:model="form.end_time" />
                                    </div>
                                </x-form-field>
                                <x-form-error name="form.start_time" />
                                <x-form-error name="form.end_time" />
                            </div>
                        </div>

                        <div class="mt-8 grid grid-cols-1 sm:grid-cols-6 gap-x-6 gap-y-8">
                            <div class="sm:col-span-6">
                                <x-form-field>
                                    <x-form-label for="category">Kategooria</x-form-label>

                                    <div class="mt-2">
                                        <select name="category_id" id="category_id"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            required wire:model="form.category_id">
                                            <option selected>Vali Kategooria</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach

                                        </select>

                                        <x-form-error name="category_id" />
                                    </div>
                                </x-form-field>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="button" class="text-sm font-semibold leading-6 text-gray-900" wire:click="$set('showModal', false)">Tühista</button>
                        <x-form-button type="submit">Salvesta</x-form-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>