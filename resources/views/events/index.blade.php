<x-layout>
    <x-slot:heading>
        Sündmuste Nimekiri
    </x-slot:heading>

    <div class="space-y-4">
        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <!-- Table Header -->
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left border-b border-gray-300">
                        <input type="checkbox" class="form-checkbox" />
                    </th>
                    <th class="px-4 py-2 text-left border-b border-gray-300">Pealkiri</th>
                    <th class="px-4 py-2 text-left border-b border-gray-300">Kategooria</th>
                    <th class="px-4 py-2 text-left border-b border-gray-300">Asukoht</th>
                    <th class="px-4 py-2 text-left border-b border-gray-300">Algus Kuupäev</th>
                    <th class="px-4 py-2 text-left border-b border-gray-300">Lõpp Kuupäev</th>
                    <th class="px-4 py-2 text-center border-b border-gray-300">Toimetused</th>
                </tr>
            </thead>

            <!-- Table Body -->
            <tbody>
                @foreach ($events as $event)
                    <tr class="hover:bg-gray-50">
                        <!-- Checkbox -->
                        <td class="px-4 py-2 border-b border-gray-300">
                            <input type="checkbox" class="form-checkbox" />
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
                            {{ $event->location }}
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
                            <div class="inline-flex items-center space-x-2">
                                <!-- Edit button links to edit page -->
                                <button type="button" class="edit-btn" data-event-id="{{ $event->id }}" title="Muuda">
                                    <x-eva-edit-outline class="w-5 h-5 cursor-pointer text-blue-500 hover:text-blue-700" />
                                </button>

                                <!-- Delete button submits a form -->
                                <form method="POST" action="{{ route('events.destroy', $event->id) }}"
                                    onsubmit="return confirm('Oled kindel, et soovid kustutada?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" title="Kustuta">
                                        <x-eva-trash-outline
                                            class="w-5 h-5 cursor-pointer text-red-500 hover:text-red-700" />
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

    <div id="editModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
        <div class="bg-white rounded-lg p-8 w-full max-w-lg relative">
            <button id="closeModal" class="absolute top-4 right-4 text-lg font-semibold">×</button>
            <h3 class="text-xl font-semibold mb-4">Muuda Sündmust</h3>

            <form method="POST" id="editForm">
                @csrf
                @method('PATCH')
                <div id="modal-content"></div>
                <div class="mt-6">
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
                        Uuenda
                    </button>
                </div>
            </form>
        </div>
</x-layout>

<script>
    // Open modal when edit button is clicked
    document.querySelectorAll('.edit-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            const eventId = this.getAttribute('data-event-id');
            const modal = document.getElementById('editModal');
            const form = document.getElementById('editForm');
            const modalContent = document.getElementById('modal-content');

            // Fetch the edit form content via AJAX (or any other method)
            fetch(`/events/${eventId}/edit`)
                .then(response => response.text())
                .then(data => {
                    modalContent.innerHTML = data; // Insert the edit form content into the modal
                    form.action = `/events/${eventId}`; // Set form action to the correct route
                    modal.classList.remove('hidden'); // Show the modal
                    document.body.style.overflow = 'hidden'; // Disable page scroll when modal is open
                })
                .catch(error => {
                    console.error("Error loading the event edit form:", error);
                    alert("An error occurred while loading the form. Please try again.");
                });
        });
    });

    // Close the modal when the close button is clicked
    document.getElementById('closeModal').addEventListener('click', function () {
        const modal = document.getElementById('editModal');
        modal.classList.add('hidden'); // Hide the modal
        document.body.style.overflow = ''; // Re-enable page scroll when modal is closed
    });

    // Close the modal if the user clicks outside the modal
    document.getElementById('editModal').addEventListener('click', function (e) {
        if (e.target === this) { // Check if the click is on the overlay (not inside the modal content)
            this.classList.add('hidden'); // Hide the modal
            document.body.style.overflow = ''; // Re-enable page scroll
        }
    });
</script>