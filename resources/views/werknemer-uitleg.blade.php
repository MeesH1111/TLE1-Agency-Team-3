<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Werknemer uitlegpagina
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">

    </x-slot>
    <div class="container">
        <a href="{{ route('home') }}" class="backarrow"></a>
        <div class="containerinfo">
            <h2 class="title">Hoe het werkt als werkzoekende</h2>
            <img class="uitlegimg" src="/images/werknemeruitlegimage1.png" alt="twee werknemers in de bouw">

            <p class="werknemertekst">Met Open Hiring heeft iedereen een eerlijke kans op een baan. Wie wil én kan
                werken, kan zó aan de slag. Zonder sollicitatiegesprek, zonder brief, zonder vragen. Met één druk op de
                knop. Open Hiring draait namelijk niet om diploma’s, maar om mensen. Niet om praatjes, maar om
                aanpakken.
            </p>
        </div>

        <div class="containerinfo">
            <h2 class="title">Maak een account</h2>
            <img class="uitlegimg" src="/images/werknemeruitlegimage2.png" alt="">
            <p class="werknemertekst">
                Het maken van account is niet nodig om vacatures te bekijken. Kijk gerust rond naar alle beschikbare
                vacatures en zie of er iets voor jou tussen zit.
            </p>
            <p class="werknemertekst">
                <strong>Voor het inschrijven op een vacature heb je wel een
                    account nodig.</strong> Je moet je naam, email en wachtwoord invoeren. Maar alle werkgevers kunnen
                hier niks van
                zien, je bent compleet anoniem. Dit is nodig om je een geautomatiseerde email te sturen als je je
                inschrijft voor een vacature.
            </p>
            <a class="btn" href="{{ route('register') }}" id="uitlegbtn"
               aria-label="Dit is een knop. klik hier om een account aan te maken">Account
                aanmaken</a>
        </div>

        <div class="containerinfo">
            <h2 class="title">Zoek een vacature</h2>
            <p class="werknemertekst">
                Het bekijken van vacatures is dus gewoon te doen zonder een account. Alle vacatures zijn ingedeeld in
                verschillende categorieën. Kies een categorie waar jij geintereseerd in bent en zie alle vacatures in
                die categorie.
            </p>
            <p class="werknemertekst">
                Zie jij een vacature die je leuk lijkt? Klik dan op die vacature voor een overzicht met
                meer informatie over die vacature.
            </p>
            <p class="werknemertekst">
                Zie je het zitten om hier te komen werken, dan kan je je inschrijven
                op de vacature. Je krijgt dan een geautomatiseerde uitnodigings email met alle informatie over hoe het
                verloopt en waar je moet zijn.
            </p>
            <a class="btn" href="" aria-label="Dit is een knop. Klik hier om vacatures te zoeken" id="uitlegbtn">Zoek
                vacatures</a>
        </div>

        <div class="storycointaner">
            <p class="storytitle">Van doorzetter naar inspiratie</p>
            <div class="storyinfo">
                <p class="storyp">
                    Na een lange zoektocht naar werk vond Nico, door Open Hiring en ondanks de uitdagingen van zijn
                    rolstoel,
                    een
                    kans bij KFC.
                </p>
                <div class="storyimgcontainer">
                    <img class="storyimg" src="images/werknemeruitlegimage3.png"
                         alt="Nico die buiten in een rolstoel zit">
                </div>
            </div>
            <a class="btn" href="{{route('success-nico')}}"
               aria-label="Dit is een knop. Klik hier om het verhaal van Nico te bekijken">Bekijk
                verhaal</a>


        </div>
    </div>
</x-base-layout>


