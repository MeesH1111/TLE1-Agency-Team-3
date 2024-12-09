<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Bedrijf Aanmaken
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">
        @vite('resources/css/companies.css')
    </x-slot>
    <header>
        <h1>Bedrijf aanmaken</h1>
    </header>

    <form class="create-form" action="{{url(route('companies.store'))}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="create-form-div">
            <label for="title">Bedrijfsnaam:</label>
            <input type="text" id="title" name="title" placeholder="Naam bedrijf...">
        </div>
        <div class="create-form-div">
            <label for="location">Locatie:</label>
            <input type="text" id="location" name="location" placeholder="Locatie bedrijf...">
        </div>
        <div class="create-form-div">
            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" placeholder="Telefoonnummer...">
        </div>
        <div class="image-div">
            <label for="image" class="custom-file-upload">Logo:</label>
            <input type="file" id="image" name="image" class="custom-file-input">
        </div>
        <div class="beschrijving-div">
            <label for="description">Beschrijving:</label>
            <input type="text" id="description" name="description" placeholder="Beschrijf hier het bedrijf...">
        </div>
        <div class="create-form-div">
            <a href="#">Terug</a>
            <button class="aanmaak-button" type="submit">Aanmaken</button>
        </div>
    </form>

</x-base-layout>

