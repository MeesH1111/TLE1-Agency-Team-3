<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Bedrijf Aanmaken
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">
        @vite(['resources/css/companies.css', 'resources/js/companies.js'])
    </x-slot>
    <header>
        <h1>Bedrijf aanmaken</h1>
    </header>

    <form class="create-form" action="{{url(route('companies.store'))}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="create-form-div">
            <label for="title">Bedrijfsnaam:</label>
            <div class="error-div">
                <input type="text" id="title" name="title" placeholder="Naam bedrijf..."
                       value="{{old('title')}}" aria-label="Bedrijfsnaam invoer veld">
                @error('title')
                <span class="error-popup">{{ $message }}</span>
                @enderror
            </div>
        </div>


        <div class="create-form-div">
            <label for="location">Locatie:</label>
            <div class="error-div">
                <input type="text" id="location" name="location" placeholder="Locatie bedrijf..."
                       value="{{old('location')}}">
                @error('location')
                <span class="error-popup">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="create-form-div">
            <label for="contact">Contact:</label>
            <div class="error-div">
                <input type="text" id="contact" name="contact" placeholder="Telefoonnummer..."
                       value="{{old('contact')}}">
                @error('contact')
                <span class="error-popup">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="image-div">
            <label for="image" class="custom-file-upload">Logo:</label>
            <div class="error-div">
                <input type="file" id="image" name="image" class="custom-file-input">
                @error('image')
                <span class="error-popup">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="beschrijving-div">
            <label for="description">Beschrijving:</label>
            <div class="error-div">
            <textarea type="text" id="description" name="description"
                      placeholder="Beschrijf hier het bedrijf...">{{old('description')}}</textarea>
                @error('description')
                <span class="error-popup">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="create-form-div">
            <a href="{{route('home')}}">Terug</a>
            <button class="aanmaak-button" type="submit">Aanmaken</button>
        </div>

    </form>

</x-base-layout>

