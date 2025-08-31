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
    <label for="name">Tag Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter tag name"
           value="{{ old('name', $tag->name ?? '') }}" required>
    <small class="form-text text-muted">The "slug" will be created automatically.</small>
</div>

<button type="submit" class="btn btn-primary">{{ isset($tag) ? 'Update Tag' : 'Create Tag' }}</button>
<a href="{{ route('admin.tags.index') }}" class="btn btn-default">Cancel</a>