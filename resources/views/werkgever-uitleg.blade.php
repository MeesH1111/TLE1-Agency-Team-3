<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Werkgever uitlegpagina
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">

    </x-slot>
    <div class="container">
        <a href="{{ route('home') }}" class="backarrow"></a>
        <div class="containerinfo">
            <h2 class="title">Hoe het werkt als werkgever</h2>
            <img class="uitlegimg" src="/images/werkgeveruitlegimage1.png" alt="een werkgever in de horeca">

            <p class="werknemertekst">Met Open Hiring heeft iedereen een eerlijke kans op een baan. Wie wil én kan
                werken, kan zó aan de slag. Zonder sollicitatiegesprek, zonder brief, zonder vragen. Met één druk op de
                knop. Open Hiring draait namelijk niet om diploma’s, maar om mensen. Niet om praatjes, maar om
                aanpakken.
            </p>
            <a class="btn" href="{{route('over-ons')}}"
               aria-label="Dit is een knop. Klik hier om meer over ons te weten te komen" id="uitlegbtn">Over ons</a>
        </div>

        <div class="containerinfo">
            <h2 class="title">Registreer je bedrijf</h2>
            <img class="uitlegimg" src="/images/werknemeruitlegimage2.png" alt="tekening van twee mensen die een bedrijf registreren">

            <p class="werknemertekst">
                Open Hiring zorgt ervoor dat uw bedrijf makkelijker aan werknemers kan komen door het proces van sollicitatie heel erg te versimpellen.
                Toekomstige werknemers kunnen met één simpele klik op een knop solliciteren op een vacature. Er wordt dan automatisch een uitnodiging naar die persoon gestuurd.
            </p>
            <p class="werknemertekst">
                Registratie van uw account is erg simpel. Bij het maken van uw bedrijfspagina wordt gevraagd om uw KvK nummer. Hierdoor weten wij dat u een echt bedrijf bent.
            </p>
            <p class="werknemertekst">
                Als uw account is geregistreerd kunt u uw bedrijfspagina aanmaken. Deze kunt u dan geheel zelf inrichten.
            </p>
        </div>

        <div class="containerinfo">
            <h2 class="title">Plaats vacatures</h2>
            <p class="werknemertekst">
                Vanaf de bedrijfspagina kan je nieuwe vacatures aanmaken. Er moet dan een formulier ingevuld worden met alle gegevens van de vacature.
                Daarna krijg je een preview van hoe de vacature er uit komt te zien en kan je dat goedkeuren of nog veranderen. Staat de vacature online? dan kunnen werkzoekende solliciteren.
            </p>
            <p class="werknemertekst">

            </p>
            <a class="btn" href="{{ route('register') }}" id="uitlegbtn"
               aria-label="Dit is een knop. klik hier om een account aan te maken">Account
                aanmaken</a>
        </div>

        <div class="storycointaner2">
            <p><i>"Dankzij Open Hiring kan ik focussen op groei, terwijl gemotiveerde mensen de kans krijgen om direct aan de slag te gaan." – Tanja, ondernemer</i></p>
            <div class="storyinfo">
                <p class="storyp">
                    Tanja, eigenaresse van een duurzame bakkerij, liep vast door het tijdrovende sollicitatieproces
                    Met Open Hiring veranderde alles: geen cv’s of gesprekken
                </p>
                <div class="storyimgcontainer">
                    <img class="storyimg" src="images/werkgeveruitlegimage2.png"
                         alt="Nico die buiten in een rolstoel zit">
                </div>
            </div>
            <a class="btn" href="{{route('success-nico')}}"
               aria-label="Dit is een knop. Klik hier om het verhaal van Nico te bekijken">Bekijk
                verhaal</a>


        </div>
    </div>
</x-base-layout>
