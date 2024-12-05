<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Categorieën
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">
        @vite('resources/css/categories.css', 'resources/js/app.js')
    </x-slot>
    <h1 id="categoryTitle">Categorieën</h1>
    <div id="categoryList">
        @foreach($categories as $category)
            <a href=" {{ route('vacancies.index',$category->id ) }}" id="{{$category->color}}"
               class="categoryCard">
                <h2>{{$category->name}}</h2>
            </a>
        @endforeach
    </div>
</x-base-layout>

