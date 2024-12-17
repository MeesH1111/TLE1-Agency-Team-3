<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Details
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">
        @vite('resources/css/app.css')
        @vite('resources/css/vacancyDetails.css')
    </x-slot>

    <h1 class="vacancy-comp-tit">{{ $vacancy->company->name }}</h1>
    <h2 id="vacancy-tit" class="{{ $category->color }}">Vacature</h2>
    <div id="vacancy-image">
        <img src="{{ asset('storage/' . $vacancy->company->image) }}" alt="{{$vacancy->company->name}} Logo"
             class="vacancy-header-img">
    </div>


    <div class="vacancy-divider-main">
        <div class="vacancy-info">
            <div><p class="bold-p">Salaris:</p>
                <p>{{ $vacancy->salary }} per maand</p></div>
            <div><p class="bold-p">Uren:</p>
                <p>{{ $vacancy->hours }} per week</p></div>
            <div><p class="bold-p">Locatie:</p>
                <p>{{ $vacancy->location }}</p></div>
            <div><p class="bold-p">Type:</p>
                <p>{{ $vacancy->type }}</p></div>
            <div><p class="bold-p">Benodigdheden:</p>
                <p>{{ $vacancy->requirements }}</p></div>
            <div>
                <p class="bold-p">Werkveld:</p>
                <p>{{ $category->name }}</p>
            </div>
            <div>
                <p class="bold-p">Wachtrij:</p>
                <p>{{ $waitingCount }}</p>
            </div>

        </div>
        <div class="vacancy-description">
            <p class="bold-p">Benodigdheden:</p>
            <p>{{ $vacancy->description }}</p>
        </div>
    </div>
    <div class="vacancy-buttons">
        @if($companyId)
            <a href="{{ route('bedrijven.next', $companyId)}}/0" class="back"
               aria-label="Terug naar Vacatures">Terug</a>
        @else
            <a href="{{ route('vacancies.index', $vacancy->category_id)}}" class="back"
               aria-label="Terug naar Vacatures">Terug</a>
        @endif

        <form action="{{ route('waitlist.store') }}" method="post">
            @csrf
            <label for="vacancyId"></label>
            <input type="hidden" id="vacancyId" name="vacancyId" value="{{$vacancy->id}}">
            <button type="submit" class="apply" aria-label="Reageer op deze vacature">Reageer</button>
        </form>

    </div>

</x-base-layout>
