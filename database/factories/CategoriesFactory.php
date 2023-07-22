<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categories>
 */
class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'        => fake()->text(5),
            'user_id'     => User::all()->unique()->random()->id,
            'description' => fake()->sentence(),
            'slug'        => fake()->slug(2),
            'is_active'   => '1',
        ];
    }
}