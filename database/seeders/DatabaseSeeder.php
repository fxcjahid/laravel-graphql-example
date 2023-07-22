<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(100)->create();
        \App\Models\Post::factory(200)->create();
        \App\Models\Categories::factory(20)->create();
        \App\Models\Tag::factory(20)->create();
        \App\Models\PostCategory::factory(100)->create();
        \App\Models\Comment::factory(300)->create();
        \App\Models\PostComment::factory(600)->create();
    }
}
