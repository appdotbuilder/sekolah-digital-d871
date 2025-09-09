<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => fake()->randomElement(['photo', 'video']),
            'url' => fake()->imageUrl(800, 600, 'school'),
            'description' => fake()->sentence(),
        ];
    }

    /**
     * Indicate that the gallery item is a photo.
     */
    public function photo(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => 'photo',
            'url' => fake()->imageUrl(800, 600, 'school'),
        ]);
    }

    /**
     * Indicate that the gallery item is a video.
     */
    public function video(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => 'video',
            'url' => 'https://www.youtube.com/watch?v=' . fake()->lexify('??????????'),
        ]);
    }
}