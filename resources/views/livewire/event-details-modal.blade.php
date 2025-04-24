<div class="{{ $showModal ? 'block' : 'hidden' }}">
    <div class="fixed z-50 inset-0">
        <div class="flex justify-center items-center min-h-screen px-4">
            <div class="z-40 fixed inset-0 bg-emerald-600 opacity-50" wire:click="$set('showModal', false)"></div>
            <div class="z-50 w-full max-w-3xl bg-white rounded-lg shadow-lg p-6" wire:click.stop>
                @if ($event)
                <h3>Pealkiri: {{ $event->title }}</h3>
                <p>Kirjeldus: {{ $event->description }}</p>

                @else
                <p>No event details available.</p>
                @endif
            </div>
        </div>
    </div>
</div>