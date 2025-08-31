{{-- Displays validation errors, if any --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-row">
    {{-- Title Field --}}
    <div class="form-group col-md-8">
        <label for="title">Title</label>
        {{-- Uses old input on validation error, otherwise uses post data, or is empty for new posts --}}
        <input type="text" class="form-control" id="title" name="title" placeholder="Post Title" value="{{ old('title', $post->title ?? '') }}" required>
    </div>

    {{-- Category Dropdown --}}
    <div class="form-group col-md-4">
        <label for="category_id">Category</label>
        <select id="category_id" name="category_id" class="form-control" required>
            <option value="">Select a Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $post->category_id ?? '') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <label for="body-editor">Content</label>
    
    {{-- Froala will attach to this textarea. No hidden inputs needed. --}}
    <textarea name="body" id="body-editor">{{ old('body', $post->body ?? '') }}</textarea>
</div>

{{-- Tags Multi-Select --}}
<div class="form-group">
    <label for="tags">Tags</label>
    <select class="select2-multiple form-control" name="tags[]" multiple="multiple" id="tags">
        @php
            // Get selected tags from old input, or from the existing post, or an empty array
            $selectedTags = old('tags', isset($post) ? $post->tags->pluck('id')->toArray() : []);
        @endphp
        @foreach($tags as $tag)
            <option value="{{ $tag->id }}" {{ in_array($tag->id, $selectedTags) ? 'selected' : '' }}>
                {{ $tag->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-row">
    {{-- Featured Image Upload --}}
    <div class="form-group col-md-6">
        <label for="featured_image">Featured Image</label>
        <input type="file" class="form-control-file" id="featured_image" name="featured_image">

        {{-- Show current image only on the edit page --}}
        @if(isset($post) && $post->featured_image)
            <div class="mt-2">
                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="Current Image" style="max-width: 200px; border-radius: 5px;">
                <p class="text-muted small">Current image. Upload a new one to replace it.</p>
            </div>
        @endif
    </div>

    {{-- Status Dropdown --}}
    <div class="form-group col-md-6">
        <label for="status">Status</label>
        <select id="status" name="status" class="form-control" required>
            <option value="draft" {{ old('status', $post->status ?? 'draft') == 'draft' ? 'selected' : '' }}>Draft</option>
            <option value="published" {{ old('status', $post->status ?? '') == 'published' ? 'selected' : '' }}>Published</option>
        </select>
    </div>
</div>

{{-- The submit button text changes depending on whether we are creating or editing --}}
<button type="submit" class="btn btn-primary">{{ isset($post) ? 'Update Post' : 'Create Post' }}</button>
<a href="{{ route('admin.posts.index') }}" class="btn btn-default">Cancel</a>


@push('scripts')
{{-- Froala Editor CSS --}}
<link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />

{{-- Froala Editor JS --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize Select2 for the tags input
        $('#tags').select2({
            placeholder: "Select tags",
            allowClear: true
        });

        // --- Initialize Froala Editor ---
        if (!document.querySelector('.fr-box')) {  // Only initialize if not already initialized
            new FroalaEditor('textarea#body-editor:not(.fr-box)', {
            // Set the editor height.
            heightMin: 300,

            // Full, feature-rich toolbar
            toolbarButtons: [
                ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript'],
                ['fontFamily', 'fontSize', 'textColor', 'backgroundColor'],
                ['paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', 'quote'],
                ['insertLink', 'insertImage', 'insertVideo', 'insertTable', 'emoticons', 'specialCharacters', 'insertHR'],
                ['selectAll', 'clearFormatting', 'help', 'html'],
                ['undo', 'redo']
            ],
            
            // Enable all plugins
            pluginsEnabled: null,

            // Placeholder text
            placeholderText: 'Start writing your amazing post content here...',

            // Image upload options (optional, requires backend setup for permanent storage)
            imageUploadURL: '/upload_image', // Example URL
            imageUploadParams: {
                _token: "{{ csrf_token() }}" // Pass CSRF token
            }
        });
    });
</script>
@endpush