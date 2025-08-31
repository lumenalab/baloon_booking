<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use App\Models\User;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // IMPORTANT: Ensure at least one user exists before running this seeder.
        $user = User::first();
        if (!$user) {
            $this->command->error('No users found. Please create a user before seeding the blog.');
            return;
        }

        // --- Clear existing data to prevent duplicates ---
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Category::truncate();
        Tag::truncate();
        Post::truncate();
        DB::table('post_tag')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');


        // --- Create Categories ---
        $categories = [
            ['name' => 'Hot Air Balloon Rides', 'slug' => 'hot-air-balloon-rides'],
            ['name' => 'Travel Guides', 'slug' => 'travel-guides'],
            ['name' => 'Dubai Attractions', 'slug' => 'dubai-attractions'],
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }

        // --- Create Tags ---
        $tags = [
            ['name' => 'Adventure', 'slug' => 'adventure'],
            ['name' => 'Luxury', 'slug' => 'luxury'],
            ['name' => 'Sunrise', 'slug' => 'sunrise'],
            ['name' => 'Desert Safari', 'slug' => 'desert-safari'],
            ['name' => 'Family Fun', 'slug' => 'family-fun'],
        ];
        foreach ($tags as $tag) {
            Tag::create($tag);
        }

        // --- Create Posts ---
        $posts = [
            [
                'title' => 'The Ultimate Guide to Your First Hot Air Balloon Ride in Dubai',
                'category_id' => 1,
                'status' => 'published',
                'body' => '<p>Floating peacefully above the Arabian desert as the sun rises is an unforgettable experience. Here is everything you need to know to prepare for your magical journey with Dubai Ballooning.</p>'
            ],
            [
                'title' => 'Top 5 Must-See Attractions in Dubai',
                'category_id' => 3,
                'status' => 'published',
                'body' => '<p>Beyond the balloons, Dubai is a city of wonders. From the towering Burj Khalifa to the bustling souks, discover the top attractions to add to your itinerary.</p>'
            ],
            [
                'title' => 'What to Wear for a Desert Balloon Safari',
                'category_id' => 2,
                'status' => 'draft',
                'body' => '<p>Comfort is key when embarking on a desert adventure. We break down the best attire for your balloon ride, ensuring you stay comfortable and stylish from takeoff to landing.</p>'
            ],
        ];

        foreach ($posts as $postData) {
            $post = Post::create([
                'user_id' => $user->id,
                'category_id' => $postData['category_id'],
                'title' => $postData['title'],
                'slug' => Str::slug($postData['title']),
                'body' => $postData['body'],
                'status' => $postData['status'],
            ]);

            // --- Attach random tags to each post ---
            $randomTags = Tag::inRandomOrder()->limit(rand(1, 3))->get();
            $post->tags()->attach($randomTags);
        }
    }
}