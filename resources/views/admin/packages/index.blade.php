
@extends('admin.layout.app')

@section('content')
<div class="page-container">
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Page Not Ready</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                    <span class="breadcrumb-item active">Under Construction</span>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh;">
                    <div class="text-center">
                        <i class="anticon anticon-tool" style="font-size: 6rem; color: #a0a0a0;"></i>
                        <h1 class="font-weight-bold mt-4">Under Construction</h1>
                        <p class="lead text-muted">
                            This feature is currently being developed and will be available soon.
                        </p>
                        <p class="mt-4">
                            We apologize for any inconvenience. Please check back later.
                        </p>
                        
                        {{-- This button uses JavaScript to go back to the previous page --}}
                        <a href="javascript:history.back()" class="btn btn-primary mt-3">
                            <i class="anticon anticon-arrow-left m-r-5"></i>
                            Go Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Wrapper END -->
</div>
@endsection