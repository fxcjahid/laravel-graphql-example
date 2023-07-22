<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id'       => Post::all()->unique()->random()->id,
            'categories_id' => Categories::all()->unique()->random()->id,
        ];
    }
}
