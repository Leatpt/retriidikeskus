<x-mail::message>
    # Retriidikeskus.ee - Uus sõnum

    Nimi: {{ $contactData['customerName'] }}

    E-mail: {{ $contactData['customerEmail'] }}

    Sõnumi sisu: {{ $contactData['customerMessage'] }}
</x-mail::message>