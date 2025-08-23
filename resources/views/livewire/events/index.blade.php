    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
                <div class="flex-1 flex flex-row gap-4">
                    <a href="/categories">
                        <h2 class="text-lg font-bold tracking-tight text-gray-300 mt-2 hover:text-gray-700">Kategooriad</h2>
                    </a>
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">Sündmused</h1>
                </div>
                <div>
                    <x-form-button type="submit" wire:click="addEvent">Lisa Sündmus</x-form-button>
                    <x-form-button
                        class="bg-red-600 text-white
                         {{ empty($selectedEvents) ? 'opacity-20 cursor-not-allowed pointer-events-none' : 'hover:bg-red-700' }}"
                        wire:click="deleteSelected"
                        wire:confirm="Kas kustutan kõik valitud üksused?">
                        Kustuta valitud
                    </x-form-button>
                </div>
            </div>
        </div>
        @livewire('events.create')
        @livewire('events.edit')
        <div class="space-y-4">
            <table class="min-w-full table-auto border-collapse border border-gray-300">
                <!-- Table Header -->
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left border-b border-gray-300">
                            <input type="checkbox" class="form-checkbox" wire:model.change="selectAll" />
                        </th>
                        <th class="px-4 py-2 text-left border-b border-gray-300">Pealkiri</th>
                        <th class="px-4 py-2 text-left border-b border-gray-300">Kategooria</th>
                        <th class="px-4 py-2 text-left border-b border-gray-300">Asukoht</th>
                        <th class="px-4 py-2 text-left border-b border-gray-300">Algus Kuupäev</th>
                        <th class="px-4 py-2 text-left border-b border-gray-300">Lõpp Kuupäev</th>
                        <th class="px-4 py-2 text-center border-b border-gray-300">Toimetused</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($events as $event)
                    <tr class="hover:bg-gray-50">
                        <!-- Checkbox -->
                        <td class="px-4 py-2 border-b border-gray-300">
                            <input type="checkbox" class="form-checkbox" value="{{ $event->id }}" wire:model.change="selectedEvents" />
                        </td>

                        <!-- Title -->
                        <td class="px-4 py-2 border-b border-gray-300">
                            {{ $event->title }}
                        </td>

                        <!-- Category -->
                        <td class="px-4 py-2 border-b border-gray-300">
                            {{ $event->category->name }}
                        </td>

                        <!-- Location -->
                        <td class="px-4 py-2 border-b border-gray-300">
                            {{ $event->location_label }}
                        </td>

                        <!-- Start Date -->
                        <td class="px-4 py-2 border-b border-gray-300">
                            {{ \Carbon\Carbon::parse($event->start_date)->locale('et')->isoFormat('D. MMMM YYYY') }}
                        </td>

                        <!-- End Date -->
                        <td class="px-4 py-2 border-b border-gray-300">
                            {{ \Carbon\Carbon::parse($event->end_date)->locale('et')->isoFormat('D. MMMM YYYY') }}
                        </td>
                        <!-- Actions (Edit/Delete) -->
                        <td class="px-4 py-2 border-b border-gray-300 text-center">
                            <div class="inline-flex items-center"> <!-- Adjusted space between buttons -->
                                <!-- Edit button links to edit page -->
                                <button type="button" class="edit-btn w-10 h-10 flex items-center justify-center"
                                    title="Muuda" wire:click="editEvent({{ $event->id }})">
                                    <x-coolicon-edit-pencil-01 class="w-5 h-5 text-emerald-500 hover:text-emerald-700 cursor-pointer" />
                                </button>

                                <button class="w-10 h-10 flex items-center justify-center"
                                    title="Kustuta" wire:click="delete({{ $event->id }})" wire:confirm="Kas olete kindel, et soovite selle sündmuse kustutada?">
                                    <x-coolicon-trash-full class="w-5 h-5 text-red-500 hover:text-red-700 cursor-pointer" />
                                </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div>
                {{ $events->links() }}
            </div>
        </div>
    </div>