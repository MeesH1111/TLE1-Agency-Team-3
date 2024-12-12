<x-base-layout>
    <x-slot:title>
        Home-pagina
    </x-slot:title>

    <x-slot name="css">
        @vite('resources/css/app.css')
    </x-slot>

    <div class="container">
        <section class="introductie">
            <h1>Een baan zonder sollicitatiegesprek</h1>
            <div class="stappen">
                <div>Direct reageren, zonder sollicitatiegesprek</div>
                <div>Jij bepaalt of je het kunt</div>
                <div>Snel aan de slag, met normaal contract</div>
            </div>
            <a href="{{ route('werknemer-uitleg') }}" class="btn">Meer weten?</a>
            <div class="choice">
                <section class="introductie">
                    <a href="{{ route('categories.index') }}" class="btn">Ik zoek werk</a>
                    <a href="#" class="btn">Ik ben werkgever</a>
                </section>
            </div>
        </section>

        <section class="partners">
            <h2>Bekijk hier bedrijven uit jouw buurt.</h2>
            <p>Jouw regio: {{$locatie}}</p>
            <p>(alleen voor demo) Jouw IP-adres: {{ $ip }}</p>
            <div class="partner-logos">
                @foreach ($partnerImages as $image)
                    <a href="{{ route('bedrijven.next', ['company' => $image['id'], 'offset' => 0]) }}">
                        <img src="{{ asset($image['path']) }}" alt="{{ $image['alt'] }}">
                    </a>
                @endforeach
            </div>

        </section>

        <section class="succesverhaal">
            <h2>Van doorzetter naar inspiratie</h2>
            <p>Na een lange zoektocht naar werk vond Nico, door Open Hiring, een kans bij SVH.</p>
            <img src="/images/werknemeruitlegimage3.png" alt="Blije man in een rolstoel.">
            <a href="success-nico" class="btn">Bekijk het verhaal</a>
        </section>
    </div>
</x-base-layout>
