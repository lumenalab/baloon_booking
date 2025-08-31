<style>
    .sidebar-widget {
        background: #f8f9fa;
        padding: 25px;
        border-radius: 8px;
        margin-bottom: 30px;
    }
    .widget-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 800;
        font-size: 1.2rem;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 10px;
    }
    .widget-title::after {
        content: '';
        display: block;
        width: 40px;
        height: 3px;
        background-color: #f39c12;
        position: absolute;
        bottom: 0;
        left: 0;
    }
    .category-list li {
        list-style: none;
        padding: 8px 0;
        border-bottom: 1px solid #e9ecef;
    }
    .category-list li:last-child {
        border-bottom: none;
    }
    .category-list a {
        color: #343a40;
        text-decoration: none;
        display: flex;
        justify-content: space-between;
        transition: color 0.2s;
    }
    .category-list a:hover {
        color: #f39c12;
    }
    .recent-post-item {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }
    .recent-post-img {
        width: 70px;
        height: 70px;
        object-fit: cover;
        border-radius: 5px;
        margin-right: 15px;
        flex-shrink: 0;
    }
    .recent-post-placeholder {
        width: 70px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #e9ecef;
        color: #adb5bd;
        border-radius: 5px;
        margin-right: 15px;
        flex-shrink: 0;
    }
    .recent-post-placeholder i {
        font-size: 1.5rem;
    }
    .recent-post-title {
        font-size: 0.95rem;
        font-weight: 600;
        line-height: 1.4;
        color: #212529;
        text-decoration: none;
    }
    .recent-post-title:hover {
        color: #f39c12;
    }

    /* --- ENHANCED TAG BADGE STYLE --- */
    .tag-list-container {
        display: flex;
        flex-wrap: wrap;
        gap: 8px; /* Adds space between tags */
    }
    .tag-badge {
        display: inline-block;
        background-color: #e9ecef; /* Light grey background */
        color: #495057 !important; /* Darker text color (important overrides default link color) */
        padding: 0.4em 0.9em;
        border-radius: 5px;
        font-size: 0.9rem;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.2s ease-in-out;
    }
    .tag-badge:hover {
        background-color: #f39c12; /* Brand orange on hover */
        color: #fff !important; /* White text on hover */
        transform: translateY(-2px);
    }
    /* --- End of Tag Badge Style --- */

</style>

<div class="col-lg-4">
    <!-- Search Widget -->
    <div class="sidebar-widget">
        <h3 class="widget-title">Search</h3>
        <form action="{{ route('blog.index') }}" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search posts..." value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>

    <!-- Recent Posts Widget -->
    @if(isset($recentPosts) && $recentPosts->isNotEmpty())
    <div class="sidebar-widget">
        <h3 class="widget-title">Recent Posts</h3>
        @foreach($recentPosts as $recent)
            <div class="recent-post-item">
                <a href="{{ route('blog.show', $recent->slug) }}">
                    @if($recent->featured_image)
                        <img src="{{ asset('storage/' . $recent->featured_image) }}" alt="{{ $recent->title }}" class="recent-post-img">
                    @else
                        <div class="recent-post-placeholder">
                            <i class="fas fa-image"></i>
                        </div>
                    @endif
                </a>
                <div>
                    <a href="{{ route('blog.show', $recent->slug) }}" class="recent-post-title">{{ $recent->title }}</a>
                    <small class="d-block text-muted">{{ $recent->created_at->format('M d, Y') }}</small>
                </div>
            </div>
        @endforeach
    </div>
    @endif

    <!-- Categories Widget -->
    @if(isset($categories) && $categories->isNotEmpty())
    <div class="sidebar-widget">
        <h3 class="widget-title">Categories</h3>
        <ul class="list-unstyled category-list">
            @foreach($categories as $category)
                <li>
                    <a href="{{ route('blog.index', ['category' => $category->slug]) }}">
                        <span>{{ $category->name }}</span>
                        <span class="badge bg-secondary rounded-pill">{{ $category->posts_count }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Tags Widget -->
    @if(isset($tags) && $tags->isNotEmpty())
    <div class="sidebar-widget">
        <h3 class="widget-title">Tags</h3>
        {{-- UPDATED: Added a container div for better layout --}}
        <div class="tag-list-container">
            @foreach($tags as $tag)
                {{-- UPDATED: Added the 'tag-badge' class to the link --}}
                <a href="{{ route('blog.index', ['tag' => $tag->slug]) }}" class="tag-badge">{{ $tag->name }}</a>
            @endforeach
        </div>
    </div>
    @endif
</div>