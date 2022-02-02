<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // user
        User::create([
            'name' => 'Pahrurozi',
            'username' => 'pahrurozi',
            'email' => 'pahrurozi17@gmail.com',
            'password' => encrypt('password'),
            'favorite_id' => 1
        ]);
        User::create([
            'name' => 'Muhammad Zakaria',
            'username' => 'muhammad-zakaria',
            'email' => 'muhammadzakaria17@gmail.com',
            'password' => encrypt('password'),
            'favorite_id' => 2
        ]);
        User::create([
            'name' => 'Titin Yustika',
            'username' => 'titin-yustika',
            'email' => 'titinyustika17@gmail.com',
            'password' => encrypt('password'),
            'favorite_id' => 3
        ]);

        // posts
        // Post::factory(20)->create();

        Post::create([
            'name' => 'Family',
            'slug' => 'family',
            'image' => 'family.png',

            'user_id' => 1,
            'category_id' => 1,
        ]);
        Post::create([
            'name' => 'Animals',
            'slug' => 'animals',
            'image' => 'animals.png',

            'user_id' => 2,
            'category_id' => 1,
        ]);
        Post::create([
            'name' => 'Plant',
            'slug' => 'plant',
            'image' => 'plant.png',

            'user_id' => 1,
            'category_id' => 2,
        ]);
        Post::create([
            'name' => 'programming',
            'slug' => 'Programming',
            'image' => 'programming.png',

            'user_id' => 1,
            'category_id' => 2,
        ]);
        Post::create([
            'name' => 'Sport',
            'slug' => 'sport',
            'image' => 'sport.png',

            'user_id' => 1,
            'category_id' => 2,
        ]);
        Post::create([
            'name' => 'Humans',
            'slug' => 'humans',
            'image' => 'humans.png',

            'user_id' => 1,
            'category_id' => 2,
        ]);
        Post::create([
            'name' => 'Bisnis',
            'slug' => 'bisnis',
            'image' => 'bisnis.png',

            'user_id' => 1,
            'category_id' => 2,
        ]);
        Post::create([
            'name' => 'Biology',
            'slug' => 'biology',
            'image' => 'biology.png',

            'user_id' => 2,
            'category_id' => 2,
        ]);
        Post::create([
            'name' => 'Jungle',
            'slug' => 'jungle',
            'image' => 'jungle.png',

            'user_id' => 1,
            'category_id' => 3,
        ]);
        Post::create([
            'name' => 'Technology',
            'slug' => 'technology',
            'image' => 'technology.png',

            'user_id' => 3,
            'category_id' => 2,
        ]);
        Post::create([
            'name' => 'Family',
            'slug' => 'family',
            'image' => 'family.png',

            'user_id' => 3,
            'category_id' => 1,
        ]);
        Post::create([
            'name' => 'Animals',
            'slug' => 'animals',
            'image' => 'animals.png',

            'user_id' => 2,
            'category_id' => 1,
        ]);
        Post::create([
            'name' => 'Plant',
            'slug' => 'plant',
            'image' => 'plant.png',

            'user_id' => 3,
            'category_id' => 2,
        ]);
        Post::create([
            'name' => 'programming',
            'slug' => 'Programming',
            'image' => 'programming.png',

            'user_id' => 1,
            'category_id' => 2,
        ]);
        Post::create([
            'name' => 'Sport',
            'slug' => 'sport',
            'image' => 'sport.png',

            'user_id' => 3,
            'category_id' => 2,
        ]);
        Post::create([
            'name' => 'Humans',
            'slug' => 'humans',
            'image' => 'humans.png',

            'user_id' => 1,
            'category_id' => 2,
        ]);
        Post::create([
            'name' => 'Bisnis',
            'slug' => 'bisnis',
            'image' => 'bisnis.png',

            'user_id' => 1,
            'category_id' => 2,
        ]);
        Post::create([
            'name' => 'Biology',
            'slug' => 'biology',
            'image' => 'biology.png',

            'user_id' => 3,
            'category_id' => 2,
        ]);
        Post::create([
            'name' => 'Jungle',
            'slug' => 'jungle',
            'image' => 'jungle.png',

            'user_id' => 1,
            'category_id' => 3,
        ]);
        Post::create([
            'name' => 'Technology',
            'slug' => 'technology',
            'image' => 'technology.png',

            'user_id' => 3,
            'category_id' => 2,
        ]);


        // category
        Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);
        Category::create([
            'name' => 'Plant',
            'slug' => 'plant'
        ]);
        Category::create([
            'name' => 'Animals',
            'slug' => 'animals'
        ]);
        Category::create([
            'name' => 'Food',
            'slug' => 'food'
        ]);
        Category::create([
            'name' => 'Sport',
            'slug' => 'sport'
        ]);
    }
}
