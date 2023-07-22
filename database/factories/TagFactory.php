<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TagFactory extends Factory
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
            'description' => fake()->paragraph(),
            'slug'        => fake()->slug(2),
            'is_active'   => '1',
        ];
    }
}
