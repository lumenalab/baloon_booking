@extends('admin.layout.app')

@section('content')
<div class="page-container">
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Manage Posts</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                    <span class="breadcrumb-item active">Posts</span>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>All Blog Posts</h4>
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Create New Post</a>
                </div>
                <div class="m-t-25">
                    {{-- Display Success/Error Messages --}}
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table id="data-table" class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    {{-- Eager loading 'user' in the controller prevents N+1 queries here --}}
                                    <td>{{ $post->user->first_name ?? 'N/A' }}</td>
                                    {{-- Eager loading 'category' in the controller prevents N+1 queries here --}}
                                    <td>
                                        <span class="badge badge-pill badge-blue">{{ $post->category->name ?? 'Uncategorized' }}</span>
                                    </td>
                                    <td>
                                        @if ($post->status == 'published')
                                            <span class="badge badge-pill badge-success">Published</span>
                                        @else
                                            <span class="badge badge-pill badge-gold">Draft</span>
                                        @endif
                                    </td>
                                    <td>{{ $post->created_at->format('d M Y') }}</td>
                                    <td>
                                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-info">Edit</a>
                                        
                                        {{-- Delete Button with confirmation --}}
                                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No posts found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    
                    {{-- Pagination Links --}}
                    <div class="m-t-25">
                        {{ $posts->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Content Wrapper END -->

</div>
<script>
    $(document).ready(function() {
        $('#data-table').DataTable();
    });
</script>
@endsection

