<x-mail::message>
    # Retriidikeskus.ee - Uus sõnum

    Nimi: {{ $contactData['customerName'] }}

    E-mail: {{ $contactData['customerEmail'] }}

    Sõnumi sisu: {{ $contactData['customerMessage'] }}

    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>