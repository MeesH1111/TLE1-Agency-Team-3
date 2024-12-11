<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Er moet nog ingelogd worden
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">

    </x-slot>
    <div>
        <img src="https://www.openhiring.nl/assets/images/logo/logo-oh.png" alt="Open Hiring Logo" class="sollicitatie-succes-img">
    </div>
    <div>
        <h1 class="sollicitatie-succes-h1">Je bent niet ingelogd!</h1>
        <p class="sollicitatie-succes-p">Je moet ingelogd zijn om op deze vacature te solliciteren</p>
    </div>

    <div>
        <a href="{{ route('login') }}" class="btn" id="sollicitatie-inlog-btn" aria-label="Knop om in te loggen">Inloggen</a>
    </div>
    <div>
        <p class="sollicitatie-login-register-p">Heb je nog geen account? Maak er dan hier één</p>
        <a href="{{ route('register') }}" class="btn" id="sollicitatie-login-register-btn" aria-label="Knop om een account aan te maken">Account aanmaken</a>
    </div>

</x-base-layout>
