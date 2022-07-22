<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create();

        $blogs = [
            ['title' => '', 'description' => '', 'image' => '/images/defaultBlog.png'],
            ['title' => '', 'description' => '', 'image' => '/images/defaultBlog.png'],
            ['title' => '', 'description' => '', 'image' => '/images/defaultBlog.png'],
            ['title' => '', 'description' => '', 'image' => '/images/defaultBlog.png'],
            ['title' => '', 'description' => '', 'image' => '/images/defaultBlog.png'],
            ['title' => '', 'description' => '', 'image' => '/images/defaultBlog.png'],
            ['title' => '', 'description' => '', 'image' => '/images/defaultBlog.png'],
            ['title' => '', 'description' => '', 'image' => '/images/defaultBlog.png'],
            ['title' => '', 'description' => '', 'image' => '/images/defaultBlog.png'],
            ['title' => '', 'description' => '', 'image' => '/images/defaultBlog.png'],
            ['title' => '', 'description' => '', 'image' => '/images/defaultBlog.png'],
            ['title' => '', 'description' => '', 'image' => '/images/defaultBlog.png'],
        ];
    }
}
