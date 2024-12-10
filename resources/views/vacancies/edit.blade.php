<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Test
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">

    </x-slot>

    <form action="{{route('vacancies.update', $vacancy->id)}}" method="POST">
        @csrf
        @method('PUT')

        @include('vacancies._form', ['vacancy' => $vacancy, 'categories' => $categories, 'companies' => $companies])

        <button type="submit" class="vacancy-btn">Vacature aanpassen</button>
    </form>


</x-base-layout>
