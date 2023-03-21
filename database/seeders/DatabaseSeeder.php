<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(50)->create();

        Category::create(['name' => 'Travel', 'description' => 'Travel']);
        Category::create(['name' => 'Gaming', 'description' => 'Gaming']);
        Category::create(['name' => 'Courses && Tuto', 'description' => 'Courses && Tuto']);

        Post::factory(30)->create();
    }
}
