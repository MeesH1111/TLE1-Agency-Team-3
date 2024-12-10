<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Companies
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">
        @vite('resources/css/companies.css')
    </x-slot>
    <header class="show-header">
        <img src="{{ asset('storage/' . $company->image) }}" alt="{{$company->name}} Logo" class="header-img">
        <div>
            <h1>{{ $company->name }}</h1>
            <p>{{ $company->location }}</p>
        </div>
    </header>

    <main class="show-main">
        <article>
            <h2>Over ons</h2>
            <p>{{$company->description}}</p>
        </article>

        <article>
            <h2>Contact</h2>
            <p>{{$company->contact}}</p>
        </article>
    </main>
</x-base-layout>
