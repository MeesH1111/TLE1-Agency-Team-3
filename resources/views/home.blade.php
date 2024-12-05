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
            <a href="#" class="btn">Meer weten?</a>
            <div class="choice">
                <section class="introductie">
                    <a href="{{ route('werknemer-uitleg') }}" class="btn">Ik zoek werk</a>
                    <a href="#" class="btn">Ik ben werkgever</a>
                </section>
            </div>
        </section>


        <section class="partners">
            <h2>Onze lokale bedrijven voor jou!</h2>
            <div class="partner-logos">
                <img src="/image/fitshe.png" alt="Logo van bedrijf fitshe">
                <img src="/image/krekerij.png" alt="Logo van bedrijf krekerij">
                <img src="/image/svh.png" alt="Logo van bedrijf SVH">
                <img src="/image/toettoetfood.png" alt="Logo van bedrijf toet toet food">
            </div>
        </section>

        <!-- succesverhaal -->
        <section class="succesverhaal">
            <h2>Van doorzetter naar inspiratie</h2>
            <p>Na een lange zoektocht naar werk vond Nico, door Open Hiring, een kans bij SVH.</p>
            <img src="images/werknemeruitlegimage3.png" alt="Blije man in een rolstoel.">
            <a href="{{ route('success-nico') }}" class="btn">Bekijk het verhaal</a>
        </section>
    </div>
</x-base-layout>

