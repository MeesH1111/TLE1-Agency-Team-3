<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Sollicitatie succes
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">

    </x-slot>
    <div>
        <img src="https://www.openhiring.nl/assets/images/logo/logo-oh.png" alt="Open Hiring Logo" class="sollicitatie-succes-img">
    </div>
    <div>
        <h1 class="sollicitatie-succes-h1">Reactie Succes!</h1>
        <p class="sollicitatie-succes-p">Je hoort zo snel mogelijk van de werkgever terug met een uitnodiging!</p>
    </div>

    <div>
        <a href="{{ route('home') }}" class="btn" id="sollicitatie-succes-btn" aria-label="Knop om terug naar de Home pagina te gaan">Terug naar Home</a>
    </div>

</x-base-layout>
