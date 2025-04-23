<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Kategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kategory = Kategory::pluck('id')->toArray();
        $user = User::pluck('id')->toArray();
        
        return [
            'poster'            => null,
            'judul'             => fake()->sentence(),
            'slug'              => fake()->slug(),
            'content'           => fake()->paragraph(3),
            'kategory_id'       => fake()->randomElement($kategory),
            'status'            => fake()->boolean(),            
            'user_id'           => fake()->randomElement($user)
        ];
    }
}
