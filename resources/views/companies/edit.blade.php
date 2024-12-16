<x-base-layout>
    {{--    Zet hier de title van je pagina neer--}}
    <x-slot:title>
        Companies Bewerken
    </x-slot:title>
    {{--    Link hier naar de css pagina die je wilt gebruiken--}}
    <x-slot name="css">
        @vite('resources/css/companies.css')
    </x-slot>

    <form class="create-form" action="{{url(route('companies.update', ['company' => $company->id]))}}" method="POST"
          enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="create-form-div">
            <label for="title">Bedrijfsnaam:</label>
            <div class="error-div">
                <input type="text" id="title" name="title" placeholder="Naam bedrijf..."
                       value="{{$company->name}}" aria-label="Bedrijfsnaam invoer veld">
                @error('title')
                <span class="error-popup">{{ $message }}</span>
                @enderror
            </div>
        </div>


        <div class="create-form-div">
            <label for="location">Locatie:</label>
            <div class="error-div">
                <input type="text" id="location" name="location" placeholder="Locatie bedrijf..."
                       value="{{$company->location}}">
                @error('location')
                <span class="error-popup">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="create-form-div">
            <label for="contact">Contact:</label>
            <div class="error-div">
                <input type="text" id="contact" name="contact" placeholder="Telefoonnummer..."
                       value="{{$company->contact}}">
                @error('contact')
                <span class="error-popup">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="image-div">
            <label for="image" class="custom-file-upload">Logo:</label>
            <div class="error-div">
                <!-- Controleer of er al een afbeelding is ingesteld -->
                @if ($company->image)
                    <div>
                        <p>Huidige afbeelding:</p>
                        <img src="{{ asset('storage/' . $company->image) }}" alt="{{$company->name}} logo"
                             style="max-height: 150px; margin-bottom: 10px;">
                    </div>
                @else
                    <p>Er is nog geen afbeelding geüpload.</p>
                @endif

                <!-- Inputveld voor nieuwe afbeelding -->
                <input type="file" id="image" name="image" class="custom-file-input">

                <!-- Validatie error tonen -->
                @error('image')
                <span class="error-popup">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="beschrijving-div">
            <label for="description">Beschrijving:</label>
            <div class="error-div">
            <textarea type="text" id="description" name="description"
                      placeholder="Beschrijf hier het bedrijf...">{{$company->description}}</textarea>
                @error('description')
                <span class="error-popup">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="create-form-div">
            <a href="{{route('bedrijven.next', ['company' => $company->id, 'offset' => 0])}}">Terug</a>
            <button class="aanmaak-button" type="submit">Aanpassen</button>
        </div>

    </form>


</x-base-layout>
