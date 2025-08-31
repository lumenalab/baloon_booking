@extends('web.layout.app')

@section('title', 'Our Blog - Dubai Ballooning')

@section('content')
{{-- Include styles from the original file, slightly modified --}}
<style>
    body, .blog-header h1, .card-title { font-family: 'Montserrat', sans-serif; }
    .blog-header { background: #f8f9fa; padding: 4rem 0; text-align: center; margin-top: 60px; }
    .blog-header h1 { font-weight: 800; font-size: 3rem; color: #333; }
    .blog-header p { color: #6c757d; font-size: 1.1rem; }
    .blog-card { transition: transform 0.3s ease, box-shadow 0.3s ease; border: none; border-radius: 10px; overflow: hidden; }
    .blog-card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0,0,0,0.1); }
    .card-img-top-wrapper { height: 220px; overflow: hidden; background-color: #e9ecef; }
    .blog-card .card-img-top { width: 100%; height: 100%; object-fit: cover; }
    .placeholder-image { display: flex; align-items: center; justify-content: center; width: 100%; height: 100%; background: linear-gradient(45deg, #fdfbfb, #ebedee); color: #adb5bd; }
    .placeholder-image i { font-size: 4rem; }
    .category-badge { display: inline-block; background-color: #f39c12; color: white !important; padding: 0.3em 0.8em; border-radius: 50px; font-size: 0.8rem; font-weight: 600; text-decoration: none; margin-bottom: 0.5rem; }
    .card-title a { color: #212529; text-decoration: none; font-weight: 800; }
    .card-title a:hover { color: #f39c12; }
    .pagination .page-item.active .page-link { background-color: #f39c12; border-color: #f39c12; }
    .pagination .page-link { color: #f39c12; }
    .filter-info { background-color: #fff3cd; border-left: 5px solid #f39c12; }
</style>

<!-- Page Header -->
<div class="blog-header">
    <div class="container">
        <h1>FROM THE SKIES</h1>
        <p>News, stories, and travel guides from the Dubai Ballooning team.</p>
    </div>
</div>

<!-- Main Content -->
<div class="container py-5">
    <div class="row">
        <!-- Blog Posts Column -->
        <div class="col-lg-8">
            
            <!-- Displaying Filter/Search Info -->
            @if(request('category'))
                <div class="alert filter-info">Showing posts in the category: <strong>{{ ucwords(str_replace('-', ' ', request('category'))) }}</strong></div>
            @elseif(request('tag'))
                <div class="alert filter-info">Showing posts tagged with: <strong>{{ ucwords(str_replace('-', ' ', request('tag'))) }}</strong></div>
            @elseif(request('search'))
                 <div class="alert filter-info">Showing search results for: <strong>{{ request('search') }}</strong></div>
            @endif

            <div class="row">
                @forelse ($posts as $post)
                    <div class="col-md-6 mb-4 d-flex align-items-stretch">
                        <div class="card blog-card w-100 shadow-sm">
                            <div class="card-img-top-wrapper">
                                <a href="{{ route('blog.show', $post->slug) }}">
                                    @if ($post->featured_image)
                                        <img src="{{ asset('storage/' . $post->featured_image) }}" class="card-img-top" alt="{{ $post->title }}">
                                    @else
                                        <div class="placeholder-image"><i class="fas fa-image"></i></div>
                                    @endif
                                </a>
                            </div>
                            <div class="card-body d-flex flex-column">
                                @if($post->category)
                                    <!-- This link now filters by category -->
                                    <a href="{{ route('blog.index', ['category' => $post->category->slug]) }}" class="category-badge">{{ $post->category->name }}</a>
                                @endif
                                <h5 class="card-title mt-2">
                                    <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                                </h5>
                                <p class="card-text text-muted flex-grow-1">
                                    {{ Str::limit(strip_tags($post->body), 100) }}
                                </p>
                                <small class="text-muted">{{ $post->created_at->format('M d, Y') }}</small>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <div class="alert alert-warning">
                            <h4>No Posts Found</h4>
                            <p>We couldn't find any posts matching your criteria. Try a different search or filter.</p>
                            <a href="{{ route('blog.index') }}" class="btn btn-primary mt-2">Clear Filters & View All Posts</a>
                        </div>
                    </div>
                @endforelse
            </div>
            
            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $posts->links() }}
            </div>
        </div>

        <!-- Sidebar Column -->
        @include('web.blog._sidebar')
    </div>
</div>
@endsection