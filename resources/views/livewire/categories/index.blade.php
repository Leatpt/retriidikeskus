<div>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Kategooriad</h1>
                <div>
                    <x-form-button type="submit" wire:click="addCategory">Lisa Kategooria</x-form-button>
                </div>
            </div>
        </div>
        @livewire('categories.create')
        <div class="space-y-4">
            <table class="min-w-full table-auto border-collapse border border-gray-300">
                <!-- Table Header -->
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left border-b border-gray-300">Kategooria</th>
                        <th class="px-4 py-2 text-center border-b border-gray-300">Toimetused</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                    <tr class="hover:bg-gray-50">
                        <!-- Category -->
                        <td class="px-4 py-2 border-b border-gray-300">
                            {{ $category->name }}
                        </td>
                        <!-- Actions (Edit/Delete) -->
                        <td class="px-4 py-2 border-b border-gray-300 text-center">
                            <div class="inline-flex items-center"> <!-- Adjusted space between buttons -->
                                <!-- Edit button links to edit page -->
                                <button class="w-10 h-10 flex items-center justify-center"
                                    title="Kustuta" wire:click="delete({{ $category->id }})">
                                    <x-coolicon-trash-full class="w-5 h-5 text-red-500 hover:text-red-700 cursor-pointer" />
                                </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>