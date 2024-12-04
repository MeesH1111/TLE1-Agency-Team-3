<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Details
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">
        @vite('resources/css/app.css')
        @vite('resources/css/vacancy.css')
    </x-slot>

    <h1 class="text-2xl font-bold">{{ $vacancy->role }}</h1>

    <p>Salaris: {{ $vacancy->salary }}</p>
    <p>Uren: {{ $vacancy->hours }}</p>
    <p>Locatie: {{ $vacancy->location }}</p>
    <p>Type: {{ $vacancy->type }}</p>
    <p>Benodigdheden: {{ $vacancy->requirements }}</p>
    <p>Beschrijving: {{ $vacancy->description }}</p>
    <a href="{{ route('vacancies.index', $vacancy->category_id)}}"
       class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">
        Terug naar vacatures
    </a>

</x-base-layout>
