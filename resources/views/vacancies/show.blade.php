<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Details
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">
        @vite('resources/css/vacancyDetails.css')
    </x-slot>

    <div class="vacancy-header">
        <img src="" alt="{{ $vacancy->company->name }} Logo">
        <div class="vacancy-divider-head">
            <h1>{{ $vacancy->company->name }}</h1>
            <h2>{{ $vacancy->role }}</h2>
        </div>
    </div>
    <div class="vacancy-divider-main">
        <div class="vacancy-info">
            <div><p><span>Salaris:</span></p>
                <p>{{ $vacancy->salary }} per maand</p></div>
            <div><p><span>Uren:</span></p>
                <p>{{ $vacancy->hours }} per week</p></div>
            <div><p><span>Locatie:</span></p>
                <p>{{ $vacancy->location }}</p></div>
            <div><p><span>Type:</span></p>
                <p>{{ $vacancy->type }}</p></div>
            <div><p><span>Benodigdheden:</span></p>
                <p>{{ $vacancy->requirements }}</p></div>
        </div>
        <div class="vacancy-description">
            {{ $vacancy->description }}
        </div>
    </div>
    <div class="vacancy-buttons">
        <a href="{{ route('vacancies.index', $vacancy->category_id)}}" class="back" aria-label="Terug naar Vacatures">Terug</a>
        <a href="#" class="apply" aria-label="Reageer op deze vacature">Reageer</a>
    </div>

</x-base-layout>
