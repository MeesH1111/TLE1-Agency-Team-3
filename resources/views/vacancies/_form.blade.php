<div>
    <label for="role" class="form-label">Job title</label>
    <input type="text" id="role" name="role" class="form-input" value="{{old('role', $vacancy->role ?? '')}}" required>
</div>

<div>
    <label for="salary" class="form-label">Salaris</label>
    <input type="number" id="salary" name="salary" class="form-input" value="{{old('salary', $vacancy->salary ?? '')}}" required>
</div>

<div>
    <label for="hours" id="hours" class="form-label">Aantal uren per week</label>
    <input type="text" id="hours" name="hours" class="form-input" value="{{old('hours', $vacancy->hours ?? '')}}" required>
</div>

<div>
    <label for="location" id="location" class="form-label">Adres</label>
    <input type="text" id="location" name="location" class="form-input" value="{{old('location', $vacancy->location ?? '')}}" required>
</div>

<div>
    <label for="type" id="type" class="form-label">Baan type</label>
    <select name="type" id="type" class="form-select">
        <option value="full_time" {{old('type', $vacancy->type ?? '') == 'full_time' ? 'selected' : ''}}>Full time</option>
        <option value="part_time" {{old('type', $vacancy->type ?? '') == 'part_time' ? 'selected' : ''}}>Part time</option>
        <option value="side_job" {{old('type', $vacancy->type ?? '') == 'side_job' ? 'selected' : ''}}>Bij baan</option>
    </select>
</div>

<div>
    <label for="category_id" class="form-label">Categorie</label>
    <select name="category_id" id="category_id" class="form-select" required>
        @foreach($categories as $category)
            <option value="{{$category->id}}" {{old('category_id', $vacancy->category_id ?? '') == $category->id ? 'selected' : ''}}>
                {{$category->name}}
            </option>
        @endforeach
    </select>
</div>

<div>
    <label for="requirements" id="requirements" class="form-label">Benodigheden</label>
    <textarea id="requirements" name="requirements" class="form-input" rows="5" required>{{old('requirements', $vacancy->requirements ?? '')}}</textarea>
</div>

<div>
    <label for="description" id="description" class="form-label">Bescrijving</label>
    <textarea id="description" name="description" class="form-input" rows="5" required>{{old('description', $vacancy->description ?? '')}}</textarea>
</div>
