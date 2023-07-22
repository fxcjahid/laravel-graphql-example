<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'        => fake()->sentence(),
            'user_id'     => User::all()->unique()->random()->id,
            'description' => fake()->paragraph(),
            'summary'     => fake()->sentence(10),
            'status'      => 'publish',
            'slug'        => fake()->slug(),
        ];
    }
}
