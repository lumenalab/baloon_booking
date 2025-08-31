<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of blog posts, with optional filtering and searching.
     */
    public function index(Request $request)
    {
        // Start a query for published posts
        $query = Post::with('category', 'user')
                     ->where('status', 'published');

        // --- Filtering by Category ---
        if ($request->has('category')) {
            $categorySlug = $request->input('category');
            $query->whereHas('category', function ($q) use ($categorySlug) {
                $q->where('slug', $categorySlug);
            });
        }

        // --- Filtering by Tag ---
        if ($request->has('tag')) {
            $tagSlug = $request->input('tag');
            $query->whereHas('tags', function ($q) use ($tagSlug) {
                $q->where('slug', $tagSlug);
            });
        }

        // --- Searching by Keyword ---
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('body', 'LIKE', "%{$searchTerm}%");
            });
        }

        // --- Execute the query ---
        $posts = $query->latest()->paginate(9)->withQueryString();

        // --- Data for the Sidebar ---
        $categories = Category::withCount('posts')->orderBy('posts_count', 'desc')->get();
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->get();
        $recentPosts = Post::where('status', 'published')->latest()->take(5)->get();

        return view('web.blog.index', compact('posts', 'categories', 'tags', 'recentPosts'));
    }

    /**
     * Display a single blog post.
     */
    public function show(Post $post)
    {
        if ($post->status !== 'published') {
            abort(404);
        }

        $post->load('category', 'user', 'tags');
        
        // --- For "Recent Posts" in the detail page sidebar ---
        $recentPosts = Post::where('status', 'published')
                           ->where('id', '!=', $post->id) // Exclude the current post
                           ->latest()
                           ->take(5)
                           ->get();

        return view('web.blog.show', compact('post', 'recentPosts'));
    }
}