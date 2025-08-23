<div>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between border-b border-gray-300">
                <div class="flex-1 flex flex-row gap-4">
                    <a href="/events">
                        <h2 class="text-lg font-bold tracking-tight text-gray-300 mt-2 hover:text-gray-700">Sündmused</h2>
                    </a>
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">Kategooriad</h1>
                </div>
                <div>
                    <x-form-button type="submit" wire:click="addCategory">Lisa Kategooria</x-form-button>
                </div>
            </div>
        </div>
        @livewire('categories.create')
        <div class="space-y-4 bg-white flex flex-col items-center justify-center py-4 px-4">
            @foreach ($categories as $category)
            <div class="w-full md:w-1/3 rounded-lg bg-lime-100 hover:bg-lime-200 shadow p-4 flex items-center justify-between transition-all">
                <span class="font-medium text-gray-900">{{ $category->name }}</span>
                <div class="inline-flex items-center">
                    <button class="w-10 h-10 flex items-center justify-center"
                        title="Kustuta" wire:click="delete({{ $category->id }})">
                        <x-coolicon-trash-full class="w-5 h-5 text-red-500 hover:text-red-700 cursor-pointer" />
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>