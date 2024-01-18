<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $pers = Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);
        $wrk = Category::create([
            'name' => 'work',
            'slug' => 'work'
        ]);
        $hob = Category::create([
            'name' => 'hobbies',
            'slug' => 'hobbies'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $pers->id,
            'title' => 'My family Post',
            'slug' => 'my-first-post',
            'excerpt' => 'lorem ipsum dolar sit amet.',
            'body' => 'lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $pers->id,
            'title' => 'My family Post',
            'slug' => 'my-first-post',
            'excerpt' => 'lorem ipsum dolar sit amet.',
            'body' => 'lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $wrk->id,
            'title' => 'My Work Post',
            'slug' => 'my-second-post',
            'excerpt' => 'lorem ipsum dolar sit amet.',
            'body' => 'lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $hob->id,
            'title' => 'My Hobbie Post',
            'slug' => 'my-third-post',
            'excerpt' => 'lorem ipsum dolar sit amet.',
            'body' => 'lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.lorem ipsum dolar sit amet.'
        ]);

    }
}
