<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => Faker::word(),
            'description' => Faker::paragraph(),
            'image' => '/images/defaultBlog.png',
            'user_id' => User::factory()->create()->id,
        ];
    }
}
