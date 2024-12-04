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

            <p class="werknemertekst">Lorem ipsum odor amet, consectetuer adipiscing elit.
                Cursus risus habitasse est imperdiet ante ultrices pharetra tortor.
                Condimentum sagittis aliquet penatibus eros montes.
                Urna montes eleifend libero quam ligula consectetur tortor hac.
            </p>
        </div>

        <div class="containerinfo">
            <h2 class="title">Maak een account</h2>
            <img class="uitlegimg" src="/images/werknemeruitlegimage2.png" alt="">
            <p class="werknemertekst">
                Lorem ipsum odor amet, consectetuer adipiscing elit.
                Cursus risus habitasse est imperdiet ante ultrices pharetra tortor.
                Condimentum sagittis aliquet penatibus eros montes.
                Urna montes eleifend libero quam ligula consectetur tortor hac.
            </p>
            <a class="btn" href="">Account aanmaken</a>
        </div>

        <div class="containerinfo">
            <h2 class="title">Zoek een vacature</h2>
            <p class="werknemertekst">
                Lorem ipsum odor amet, consectetuer adipiscing elit.
                Cursus risus habitasse est imperdiet ante ultrices pharetra tortor.
                Condimentum sagittis aliquet penatibus eros montes.
                Urna montes eleifend libero quam ligula consectetur tortor hac.
            </p>
            <a class="btn" href="">Zoek vacatures</a>
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
            <a class="btn" href="">Bekijk verhaal</a>


        </div>
    </div>
</x-base-layout>


