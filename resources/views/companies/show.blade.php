<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Companies
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">

    </x-slot>

    <h1>{{ $company->name }}</h1>

    @if($company->image)
        <img src="{{ asset('storage/' . $company->image) }}" alt="Company Logo" style="width:100px;height:auto;">
    @endif

</x-base-layout>
