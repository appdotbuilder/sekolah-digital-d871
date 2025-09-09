<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Extracurricular>
 */
class ExtracurricularFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $activities = [
            'Paskibra', 'PMR', 'Pramuka', 'OSIS', 'Rohis', 'English Club',
            'Science Club', 'Basketball', 'Futsal', 'Volleyball', 'Badminton',
            'Tari Tradisional', 'Musik', 'Teater', 'Jurnalistik', 'Fotografi'
        ];

        return [
            'name' => fake()->randomElement($activities),
            'description' => fake()->paragraphs(3, true),
            'image' => null,
        ];
    }
}