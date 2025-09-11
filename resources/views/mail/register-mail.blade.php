<x-mail::message>
    # Retriidikeskus.ee - Retriidile Registreerimine

    Nimi: {{ $contactData['registerName'] }}

    E-mail: {{ $contactData['registerEmail'] }}

    Avaldas soovi registreerida end retriidile.
    Retriit: {{ $contactData['eventTitle'] }}
    Kuupäevadel: {{ $contactData['eventDates'] }}
    Osalustasu: {{ $contactData['eventPrice'] }} €

    Saada palun kinnitus ja arve.
</x-mail::message>