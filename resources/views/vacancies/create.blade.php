<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Test
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">
        @vite('resources/css/app.css')
        @vite('resources/css/vacancy.css')
    </x-slot>

    <form action="{{route('vacancies.store')}}" method="POST">
        @csrf
        @include('vacancies._form', ['vacancy' => null, 'categories' => $categories, 'companies' => $companies])

        <button type="submit" class="vacancy-btn">Naar preview</button>
    </form>

</x-base-layout>
