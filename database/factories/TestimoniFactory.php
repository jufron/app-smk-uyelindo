<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimoni>
 */
class TestimoniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_lengkap'      => fake()->name(),
            'avatar'            => null,
            'tahun_lulus'       => fake()->year(),
            'pekerjaan'         => fake()->jobTitle(),
            'content'           => fake()->paragraph(),
            'status'            => fake()->boolean(),
        ];
    }
}
