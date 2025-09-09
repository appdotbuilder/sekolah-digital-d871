<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->boolean(60) ? User::factory() : null,
            'message' => fake()->paragraphs(2, true),
            'replied' => fake()->boolean(30),
        ];
    }

    /**
     * Indicate that the feedback has been replied.
     */
    public function replied(): static
    {
        return $this->state(fn (array $attributes) => [
            'replied' => true,
        ]);
    }

    /**
     * Indicate that the feedback is unreplied.
     */
    public function unreplied(): static
    {
        return $this->state(fn (array $attributes) => [
            'replied' => false,
        ]);
    }
}