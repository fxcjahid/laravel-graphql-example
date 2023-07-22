<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => User::all()->unique()->random()->id,
            'user_id' => User::all()->unique()->random()->id,
            'text'    => fake()->sentence(),
            'status'  => 'publish',
        ];

    }
}
