<label for="category">Category</label>
<select name="category" tabindex="3" id="category" class="form-control">
    @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select>