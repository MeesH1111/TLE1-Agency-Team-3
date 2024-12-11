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

        <div>
            <label for="category_id" class="form-label">Bedrijf</label>
            <select name="category_id" id="category_id" class="form-select" required>
                @foreach($companies as $company)
                    <option value="{{$company->id}}" {{old('category_id', $vacancy->category_id ?? '') == $company->id ? 'selected' : ''}}>
                        {{$company->name}}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn">Naar preview</button>
    </form>

</x-base-layout>
