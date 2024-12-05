<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Vacatures
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">
        @vite('resources/css/app.css')
        @vite('resources/css/vacancy.css')
    </x-slot>

    <body class="vacancy-style">

    <h1 id="vacancyTitle">Vacatures</h1>
    <nav class="vacancyNav">
        <a class="Supermarkten" id="green" href="{{route('vacancies.index', ['category' => '1'])}}">Supermarkten,</a>
        <a class="HorecaCatering" id="red" href="{{route('vacancies.index', ['category' => '2'])}}">Horeca
            & Catering,</a>
        <a class="LogistiekTransport" id="blue"
           href="{{route('vacancies.index', ['category' => '3'])}}">Logistiek & Transport,</a>
        <a class="Schoonmaak" id="white"
           href="{{route('vacancies.index', ['category' => '4'])}}">Schoonmaak,</a>
        <a class="BouwTechniek" id="orange" href="{{route('vacancies.index', ['category' => '5'])}}">Bouw &
            Techniek,</a>
        <a class="ZorgWelzijn" id="blue1" href="{{route('vacancies.index', ['category' => '6'])}}">Zorg &
            Welzijn,</a>
        <a class="Toerisme" id="yellow" href="{{route('vacancies.index', ['category' => '7'])}}">Toerisme,</a>
        <a class="Scholen" id="blue2" href="{{route('vacancies.index', ['category' => '8'])}}">Scholen,</a>
        <a class="Evenementen" id="red1" href="{{route('vacancies.index', ['category' => '9'])}}">Evenementen
            & Entertainment,</a>
        <a class="Industrie" id="grey" href="{{route('vacancies.index', ['category' => '10'])}}">Industrie</a>

    </nav>

    {{--    <h2 class="{{$category}}">Categorie: {{$category}}</h2>--}}
    {{--    <a href="{{ route('categories.index') }}">Banaan</a>--}}

    <form method="get" action="{{route('vacancies.search')}}">
        @csrf
        <label for="category"></label>
        <input type="hidden" name="category" id="category" value="{{$category}}">

        <label for="search"></label>
        <input type="text" name="search" id="search" placeholder="Zoek specifiek"
               value="{{ request()->input('searchToken') ?  request()->input('searchToken') : ''  }}">
    </form>
    @if($vacancies->isNotEmpty())
        <div>
            <ul>
                @foreach ($vacancies as $vacancy)
                    <li>Rol: {{ $vacancy->role}} </li>
                    <li>Salaris: €{{ $vacancy->salary}} </li>
                    <li>Uren: {{ $vacancy->hours}} </li>
                    <li>Locatie: {{ $vacancy->location}} </li>
                    <li>Type: {{ $vacancy->type}} </li>
                    <li>Benodigdheden: {{ $vacancy->requirements}} </li>
                    <li>Beschrijving: {{ $vacancy->description}} </li>
                    <a href="{{route('vacancies.show', ['id' => $vacancy->id])}}">Zie details</a>
                @endforeach
            </ul>
        </div>

    @else
        <h3>No vacancies available in this category.</h3>
    @endif
    </body>
</x-base-layout>


