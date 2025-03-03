<x-edit-layout>
    <div class="flex justify-center items-center px-4">
        <form method="POST" action="/events/{{ $event->id }}">
            @csrf
            @method('PATCH')

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="grid grid-cols-1 sm:grid-cols-6 gap-x-6 gap-y-8">
                        <div class="sm:col-span-6">
                            <x-form-field>
                                <x-form-label for="title">Pealkiri</x-form-label>

                                <div class="mt-2">
                                    <x-form-input name="title" id="title" placeholder="Retriit"
                                        value="{{ old('title', $event->title) }}" required />

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
                                    <textarea name="description" id="description" rows="4"
                                        class="w-full p-2 border border-gray-300 rounded-md">{{ old('description', $event->description) }}</textarea>

                                    <x-form-error name="description" />
                                </div>
                            </x-form-field>
                        </div>
                    </div>

                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-6 gap-x-6 gap-y-8">
                        <div class="sm:col-span-3">
                            <x-form-field>
                                <x-form-label for="choose_dates">Vali kuupäevad</x-form-label>

                                <div class="mt-2 flex items-center space-x-2">
                                    <x-form-input id="start_date" name="start_date" type="date" required class="w-full"
                                        value="{{ old('start_date', $event->start_date) }}" />

                                    <span>-</span>

                                    <x-form-input name="end_date" id="end_date" type="date" class="w-full"
                                        value="{{ old('end_date', $event->end_date) }}" />

                                    <x-form-error name="start_date" />
                                    <x-form-error name="end_date" />
                                </div>
                            </x-form-field>
                        </div>
                    </div>

                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-6 gap-x-6 gap-y-8">
                        <div class="sm:col-span-3">
                            <x-form-field>
                                <x-form-label for="choose_times">Vali Kellaajad</x-form-label>

                                <div class="mt-2 flex items-center space-x-2">
                                    <x-form-input id="start_time" name="start_time" type="time" required
                                        value="{{ old('start_time', $event->start_time) }}" />

                                    <span>-</span>

                                    <x-form-input name="end_time" id="end_time" type="time"
                                        value="{{ old('end_time', $event->end_time) }}" />

                                    <x-form-error name="start_time" />
                                    <x-form-error name="end_time" />
                                </div>
                            </x-form-field>
                        </div>
                    </div>

                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-6 gap-x-6 gap-y-8">
                        <div class="sm:col-span-6">
                            <x-form-field>
                                <x-form-label for="category">Kategooria</x-form-label>

                                <div class="mt-2">
                                    <select name="category_id" id="category_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required>
                                        <option selected>Vali Kategooria</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('category_id', $event->category_id) == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <x-form-error name="category_id" />
                                </div>
                            </x-form-field>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-edit-layout>