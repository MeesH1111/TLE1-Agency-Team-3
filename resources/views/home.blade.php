<x-base-layout>
    <x-slot:title>
        Home-pagina
    </x-slot:title>

    <x-slot name="css">
        @vite('resources/css/app.css')
    </x-slot>

    <div class="container">
        <button id="toon-partners-btn" class="btn">Klik hier om bedrijven dichtbij mij te zien. Open Hiring mag mijn locatie weten.</button>

        <section class="introductie">
            <h1>Een baan zonder sollicitatiegesprek</h1>
            <div class="stappen">
                <div>Direct reageren, zonder sollicitatiegesprek</div>
                <div>Jij bepaalt of je het kunt</div>
                <div>Snel aan de slag, met normaal contract</div>
            </div>
            <a href="{{ route('werknemer-uitleg') }}" class="meer-weter-btn">Meer weten?</a>
            <div class="choice">
                <section class="introductie">
                    <a href="{{ route('categories.index') }}" class="btn">Ik zoek werk</a>
                    <a href="{{ route('werkgever-uitleg')  }}" class="btn">Ik ben werkgever</a>
                </section>
            </div>
        </section>

        <!-- Verstopte partners-sectie -->
        <section class="partners hidden" id="partners-section">
            <h2>Bekijk hier bedrijven uit jouw buurt.</h2>
            <p>Jouw regio: {{$locatie}}</p>
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

    <script>
        document.getElementById('toon-partners-btn').addEventListener('click', function () {
            const partnersSection = document.getElementById('partners-section');
            partnersSection.classList.remove('hidden');
            this.style.display = 'none'; // Verberg de knop na klikken
        });
    </script>

</x-base-layout>
