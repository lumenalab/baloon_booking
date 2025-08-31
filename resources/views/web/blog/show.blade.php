@extends('web.layout.app')

@section('title', $post->title)

@section('content')
{{-- Include styles from the original file --}}
<style>
    body, .blog-title { font-family: 'Montserrat', sans-serif; }
    .blog-post-container { padding-top: 100px; padding-bottom: 50px; }
    .blog-title { font-size: 2.8rem; font-weight: 800; line-height: 1.2; margin-bottom: 1rem; }
    .post-meta { color: #6c757d; margin-bottom: 2rem; }
    .post-meta span { margin-right: 15px; }
    .featured-image-container { margin-bottom: 2rem; border-radius: 10px; overflow: hidden; max-height: 500px; }
    .featured-image-container img { width: 100%; height: 100%; object-fit: cover; }
    .placeholder-image-large { display: flex; align-items: center; justify-content: center; width: 100%; height: 400px; background: #f1f3f5; color: #ced4da; border-radius: 10px; }
    .placeholder-image-large i { font-size: 6rem; }
    .blog-content { font-size: 1.1rem; line-height: 1.8; color: #343a40; }
    .blog-content h1, .blog-content h2, .blog-content h3 { font-weight: 700; margin-top: 2rem; margin-bottom: 1rem; }
    .blog-content p { margin-bottom: 1.5rem; }
    .blog-content a { color: #f39c12; text-decoration: underline; }
    .blog-content blockquote { border-left: 4px solid #f39c12; padding-left: 1rem; font-style: italic; color: #6c757d; }
    .tag-badge { display: inline-block; background-color: #e9ecef; color: #495057 !important; padding: 0.4em 0.9em; margin-right: 0.5rem; margin-bottom: 0.5rem; border-radius: 5px; font-size: 0.9rem; text-decoration: none; }
</style>

<div class="container blog-post-container">
    <div class="row">
        <!-- Main Post Content Column -->
        <div class="col-lg-8">
            <article>
                <header class="mb-4">
                    @if($post->category)
                        <a href="{{ route('blog.index', ['category' => $post->category->slug]) }}" class="category-badge mb-3">{{ $post->category->name }}</a>
                    @endif
                    <h1 class="blog-title">{{ $post->title }}</h1>
                    <div class="post-meta">
                        <span>By {{ $post->user->name ?? 'Admin' }}</span>
                        <span>&bull;</span>
                        <span>{{ $post->created_at->format('F j, Y') }}</span>
                    </div>
                </header>

                @if ($post->featured_image)
                    <div class="featured-image-container shadow-sm">
                        <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}">
                    </div>
                @else
                    <div class="placeholder-image-large mb-4"><i class="fas fa-image"></i></div>
                @endif

                <section class="blog-content">
                    {!! $post->body !!}
                </section>
            </article>

            @if($post->tags->isNotEmpty())
            <hr class="my-5">
            <div class="tags-section">
                <h4>Related Tags</h4>
                @foreach ($post->tags as $tag)
                    <!-- This link now filters by tag -->
                    <a href="{{ route('blog.index', ['tag' => $tag->slug]) }}" class="tag-badge">{{ $tag->name }}</a>
                @endforeach
            </div>
            @endif
        </div>

        <!-- Sidebar Column -->
        {{-- Here we pass only the recent posts to the sidebar --}}
        @include('web.blog._sidebar', ['recentPosts' => $recentPosts])

    </div>
</div>
@endsection