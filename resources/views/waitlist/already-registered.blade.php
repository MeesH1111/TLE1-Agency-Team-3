<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Er is al gesolliciteerd
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">

    </x-slot>
    <div>
        <img src="https://www.openhiring.nl/assets/images/logo/logo-oh.png" alt="Open Hiring Logo" class="sollicitatie-succes-img">
    </div>
    <div>
        <h1 class="sollicitatie-succes-h1">Je hebt al gereageerd!</h1>
        <p class="sollicitatie-succes-p">Je hebt al gereageerd op deze vacature. Je krijgt zo snel mogelijk een uitnodiging van de werkgever</p>
    </div>

    <div>
        <a href="{{ route('home') }}" class="btn" id="sollicitatie-succes-btn" aria-label="Knop om terug naar de Home pagina te gaan">Terug naar Home</a>
    </div>

</x-base-layout>
