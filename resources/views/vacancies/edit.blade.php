<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Vacature aanpassen
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">
        @vite('resources/css/vacanciesCreate.css')

    </x-slot>

    <form action="{{route('vacancies.update', $vacancy->id)}}" method="POST" class="vacancies-form">
        @csrf
        @method('PUT')

        @include('vacancies._form', ['vacancy' => $vacancy, 'categories' => $categories, 'companies' => $companies])
        <div>
            <label for="company_id" class="form-label"></label>
            <input type="hidden" id="company_id" name="company_id" value="2">
        </div>

        <div class="form-div-btn">
            <a href="{{route('vacancies.show', $vacancy->id)}}" class="back">Terug</a>
            <button type="submit" class="btn" aria-label="Knop voor het aanpassen van uw vacature.">Vacature aanpassen
            </button>
        </div>
    </form>


</x-base-layout>
