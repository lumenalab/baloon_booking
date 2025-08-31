@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="name">Category Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name"
           value="{{ old('name', $category->name ?? '') }}" required>
    <small class="form-text text-muted">The "slug" will be created automatically.</small>
</div>

<button type="submit" class="btn btn-primary">{{ isset($category) ? 'Update Category' : 'Create Category' }}</button>
<a href="{{ route('admin.categories.index') }}" class="btn btn-default">Cancel</a>