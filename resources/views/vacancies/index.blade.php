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
    <h2 id="vacancyUnderTitle" class="{{$categoryModel->color}}">{{ $categoryModel->name }}</h2>
    <div id="grieks">
        <a href="{{ route('categories.index') }}" class="backarrow"></a>
        <p>Terug naar categorieën</p>
    </div>
    <form method="get" action="{{route('vacancies.search')}}">
        @csrf
        <label for="category"></label>
        <input type="hidden" name="category" id="category" value="{{$category}}">

        <label for="search"></label>
        <input type="text" name="search" id="search" class="groen" placeholder="Zoek specifiek"
               value="{{ request()->input('searchToken') ?  request()->input('searchToken') : ''  }}">
    </form>
    <div id="cardsContainer" class="{{$categoryModel->color}}">
        @if($vacancies->isNotEmpty())
            <div id="vacancy-list">
                @foreach ($vacancies as $vacancy)
                    <ul>
                        <li id="function">Functie: <span class="functionSpan">{{ $vacancy->role}}</span></li>
                        <li>Locatie: {{ $vacancy->company->name}}</li>
                        <li id="wage">Salaris: €{{ $vacancy->salary}} per maand</li>
                        <li>Aantal uren per week: {{ $vacancy->hours}}</li>
                        <a class="ulA{{$categoryModel->color}}"
                           href="{{route('vacancies.show', ['id' => $vacancy->id])}}">Zie Meer !</a>
                    </ul>
                @endforeach
            </div>
    </div>
    @else
        <h3>No vacancies available in this category.</h3>
    @endif


    </body>
</x-base-layout>


