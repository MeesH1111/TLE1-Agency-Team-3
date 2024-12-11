<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Vacature aanmaken
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">
        @vite('resources/css/vacanciesCreate.css')
    </x-slot>

    <form action="{{route('vacancies.store')}}" method="POST" class="vacancies-form">
        @csrf
        @include('vacancies._form', ['vacancy' => null, 'categories' => $categories, 'companies' => $companies])

        <div class="form-div">
            <label for="company_id" class="form-label"></label>
            <input type="hidden" id="company_id" name="company_id" value="2">
        </div>

        <div class="form-div-btn">
            <a href="#">Terug</a>
            <button type="submit" class="btn" aria-label="Knop voor naar de preview van uw vacature.">Naar preview
            </button>
        </div>
    </form>

</x-base-layout>
