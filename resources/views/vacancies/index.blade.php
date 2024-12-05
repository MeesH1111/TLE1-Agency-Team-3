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

    <a href="{{ route('categories.index') }}" class="backarrow"></a>


    <form method="get" action="{{route('vacancies.search')}}">
        @csrf
        <label for="category"></label>
        <input type="hidden" name="category" id="category" value="{{$category}}">

        <label for="search"></label>
        <input type="text" name="search" id="search" placeholder="Zoek specifiek"
               value="{{ request()->input('searchToken') ?  request()->input('searchToken') : ''  }}">
    </form>
    @if($vacancies->isNotEmpty())
        <div class="vacancy-list">
            @foreach ($vacancies as $vacancy)
            <ul>
                    <li>Rol: {{ $vacancy->role}} </li>
                    <li>Type: {{ $vacancy->type}} </li>
                    <li>Salaris: €{{ $vacancy->salary}} per maand</li>
                    <li>Uren: {{ $vacancy->hours}} per week </li>
                    <a href="{{route('vacancies.show', ['id' => $vacancy->id])}}">Zie details</a>
            </ul>
            @endforeach
        </div>

    @else
        <h3>No vacancies available in this category.</h3>
    @endif
    </body>
</x-base-layout>


