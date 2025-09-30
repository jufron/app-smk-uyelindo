<?php

namespace Database\Factories;

use App\Models\SiswaBerprestasi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiswaBerprestasi>
 */
class SiswaBerprestasiFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = SiswaBerprestasi::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'foto'                  => 'foto/siswa-berprestasi/default.png',
            'nama_lengkap'          => $this->faker->name(),
            'kelas'                 => $this->faker->randomElement(['X', 'XI', 'XII']),
            'jenis_prestasi'        => $this->faker->randomElement(['Akademik', 'Non Akademik']),
            'peringkat'             => $this->faker->randomElement(['Juara 1', 'Juara 2', 'Juara 3', 'Harapan 1', 'Harapan 2', 'Harapan 3']),
            'tahun'                 => $this->faker->year(),
            'tingkat'               => $this->faker->randomElement(['Sekolah', 'Kecamatan', 'Kabupaten', 'Provinsi', 'Nasional', 'Internasional']),
            'nama_penyelenggara'    => $this->faker->company(),
            'keterangan'            => $this->faker->sentence(),
            'created_at'            => now(),
            'updated_at'            => now(),
        ];
    }
}
