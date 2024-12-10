<x-base-layout>
    <x-slot:title>
        Tanja's groei dankzij Open Hiring
    </x-slot:title>

    <x-slot name="css">
        @vite('resources/css/succes.css')
    </x-slot>

    <div class="container">
        <section class="story">
            <a href="{{ route('home') }}" class="backarrow"></a>
            <h1>Tanja's groei dankzij Open Hiring</h1>
            <p>
                Tanja, ondernemer in de duurzame voedselindustrie, droomde van groei met haar ambachtelijke bakkerij die lokale en biologische ingrediënten gebruikt. Maar personeel vinden bleek een groot obstakel. Vacatures bleven lang onvervuld, waardoor ze vastzat in uitvoerend werk en haar innovaties stil stonden.            </p>
            <p>
                Tijdens een netwerkbijeenkomst hoorde Tanja over Open Hiring: geen cv’s, sollicitatiegesprekken of ingewikkelde procedures. Ze besloot het uit te proberen voor een vacature voor productiemedewerkers. Tot haar verrassing stonden er binnen enkele dagen enthousiaste mensen klaar om te beginnen. Haar team was snel weer op sterkte, zonder wekenlang werven.            </p>
            <p>
                Open Hiring bleek meer dan een tijdsbesparing. Tanja’s bedrijfscultuur verbeterde door de diversiteit en motivatie van medewerkers die hun kans grepen, ongeacht hun achtergrond. Dankzij de vrijgekomen tijd richtte Tanja zich op groei. Ze lanceerde een glutenvrije productlijn, sloot een deal met een supermarktketen en gaf workshops over duurzaam bakken.            </p>
            <p>
                In twee jaar tijd verdubbelde haar omzet en het aantal werknemers. Tanja’s aanpak inspireerde andere bedrijven in de regio. "Ik dacht dat mijn groei zou stagneren door het personeelstekort, maar Open Hiring gaf me juist een duw vooruit. Nu draag ik niet alleen bij aan een succesvolle bakkerij, maar ook aan een inclusieve samenleving."            </p>
            <img src="/images/succestanja.png" alt="Blije bedrijfseigenaar">
            <a href="{{ route('register') }}" class="btn" id="story-button" aria-label="Knop om een account aan te maken">Account maken</a>
        </section>
    </div>

</x-base-layout>
