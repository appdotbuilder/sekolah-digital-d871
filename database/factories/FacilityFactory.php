<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facility>
 */
class FacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $facilities = [
            'Perpustakaan', 'Laboratorium Komputer', 'Laboratorium Fisika',
            'Laboratorium Kimia', 'Laboratorium Biologi', 'Ruang Olahraga',
            'Aula', 'Lapangan Basket', 'Lapangan Futsal', 'Masjid',
            'Kantin', 'UKS', 'Ruang Musik', 'Studio Tari'
        ];

        return [
            'name' => fake()->randomElement($facilities),
            'description' => fake()->paragraphs(2, true),
            'image' => null,
        ];
    }
}