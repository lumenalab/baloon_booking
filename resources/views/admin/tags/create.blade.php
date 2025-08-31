@extends('admin.layout.app')

@section('content')
<div class="page-container">
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Create New Tag</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="{{ route('admin.tags.index') }}">Tags</a>
                    <span class="breadcrumb-item active">Create</span>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4>Tag Details</h4>
                <form action="{{ route('admin.tags.store') }}" method="POST">
                    @csrf
                    @include('admin.tags._form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection