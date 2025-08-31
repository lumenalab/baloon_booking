@extends('admin.layout.app')

@section('content')
<div class="page-container">
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Create New Post</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="{{ route('admin.posts.index') }}">Posts</a>
                    <span class="breadcrumb-item active">Create</span>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4>Post Details</h4>
                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('admin.posts._form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- USE THE NEW SCRIPT BLOCK HERE --}}
@push('scripts')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    $(document).ready(function() {
        $('#tags').select2({
            placeholder: "Select tags",
            allowClear: true
        });

        ClassicEditor
            .create(document.querySelector('#body-editor'), {
                toolbar: { items: ['heading','|','fontFamily','fontSize','fontColor','fontBackgroundColor','|','bold','italic','underline','strikethrough','|','alignment','|','numberedList','bulletedList','|','outdent','indent','|','link','insertTable','blockQuote','imageUpload','mediaEmbed','|','code','codeBlock','|','undo','redo'] },
            })
            .catch(error => { console.error(error); });
    });
</script>
@endpush