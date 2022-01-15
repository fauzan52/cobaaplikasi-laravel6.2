<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory(5)->create();



        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Networking',
            'slug' => 'networking'
        ]);

        Category::create([
            'name' => 'No  Category',
            'slug' => 'no-category'
        ]);

        Post::factory(30)->create();
    }
}
