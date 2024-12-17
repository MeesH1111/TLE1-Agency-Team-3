<div class="form-div-input">
    <label for="photo">Bedrijfslogo</label>
    <div class="form-error">
        <input type="file" id="photo" name="photo" placeholder="Kies een foto bestand..." class="form-input" value="{{old('image',$vacancy->photo ?? '')}}"
        aria-label="Kies een foto bestand om te uploaden">
        @error('image')
        <span class="error-message">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-div-input">
    <label for="role" class="form-label">Vacature titel</label>
    <div class="form-error">
        <input type="text" id="role" name="role" placeholder="Vul hier de baan titel..." class="form-input" value="{{old('role', $vacancy->role ?? '')}}"
               aria-label="Het veld is leeg. Vul de rol van de medewerker in alstublieft">
        @error('role')
        <span class="error-message">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-div-input">
    <label for="salary" class="form-label">Salaris</label>
    <div class="form-error">
        <input type="number" id="salary" name="salary" placeholder="Vul hier de salaris in..." class="form-input" value="{{old('salary', $vacancy->salary ?? '')}}"
               aria-label="Het veld is leeg. Vul hier in nummers de salaris alstublieft.">
        @error('salary')
        <span class="error-message">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-div-input">
    <label for="hours" id="hours" class="form-label">Aantal uren per week</label>
    <div class="form-error">
        <input type="number" id="hours" name="hours" placeholder="Vul hier het aantal uren in..." class="form-input" value="{{old('hours', $vacancy->hours ?? '')}}"
               aria-label="">
        @error('hours')
        <span class="error-message">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-div-input">
    <label for="location" id="location" class="form-label">Adres</label>
    <div class="form-error">
        <input type="text" id="location" name="location" placeholder="Vul hier de adres in..." class="form-input" value="{{old('location', $vacancy->location ?? '')}}">

        @error('location')
        <span class="error-message">{{$message}}</span>
        @enderror

    </div>
</div>

<div class="form-div-select">
    <label for="type" id="type" class="form-label">Baan type</label>
    <div class="form-error">
        <select name="type" id="type"  class="form-select">
            <option value="full_time" {{old('type', $vacancy->type ?? '') == 'full_time' ? 'selected' : ''}}>Full time</option>
            <option value="part_time" {{old('type', $vacancy->type ?? '') == 'part_time' ? 'selected' : ''}}>Part time</option>
            <option value="side_job" {{old('type', $vacancy->type ?? '') == 'side_job' ? 'selected' : ''}}>Bij baan</option>
        </select>

        @error('type')
        <span class="error-message">{{$message}}</span>
        @enderror

    </div>

</div>

<div class="form-div-select">
    <label for="category_id" class="form-label">Categorie</label>
    <div class="form-error">
        <select name="category_id" id="category_id" class="form-select" aria-label="Drop-down menu lijst van categorieën">
            @foreach($categories as $category)
                <option value="{{$category->id}}" {{old('category_id', $vacancy->category_id ?? '') == $category->id ? 'selected' : ''}} aria-label="{{$category->naam}} categorie">
                    {{$category->name}}
                </option>
            @endforeach
        </select>

        @error('category_id')
        <span class="error-message">{{$message}}</span>
        @enderror

    </div>

</div>

<div class="form-div-area">
    <label for="requirements" class="form-label">Benodigdheden</label>
    <div class="form-error">
        <textarea id="requirements" name="requirements" placeholder="Vul hier de bijbehorende benodigdheden in..." class="form-textarea" rows="5">{{old('requirements', $vacancy->requirements ?? '')}}</textarea>
        @error('requirements')
        <span class="error-message">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-div-area">
    <label for="description" class="form-label">Beschrijving</label>
    <div class="form-error">
        <textarea id="description" name="description" placeholder="Beschrijf hier de vacature..." class="form-textarea" rows="5">{{old('description', $vacancy->description ?? '')}}</textarea>
        @error('description')
        <span class="error-message">{{$message}}</span>
        @enderror
    </div>
</div>
