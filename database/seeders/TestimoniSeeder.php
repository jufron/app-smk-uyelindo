<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Testimoni::factory()->cound(4)->create();

        collect([
            [
                'nama_lengkap' => 'Yohanes Nalle',
                'avatar' => null,
                'tahun_lulus' => 2020,
                'pekerjaan' => 'Guru Pendidikan Agama Kristen',
                'content' => 'Pengajaran yang saya terima sangat membekali saya untuk dunia pelayanan dan pendidikan.',
                'status' => true
            ],
            [
                'nama_lengkap' => 'Maria Kristina Taneo',
                'avatar' => null,
                'tahun_lulus' => 2019,
                'pekerjaan' => 'Pendeta Muda',
                'content' => 'Saya bersyukur bisa belajar di sekolah ini. Spiritualitas dan akademiknya luar biasa.',
                'status' => true
            ],
            [
                'nama_lengkap' => 'Yuliana Lado',
                'avatar' => null,
                'tahun_lulus' => 2021,
                'pekerjaan' => 'Aktivis Sosial',
                'content' => 'Ilmu yang saya pelajari sangat relevan dan membuat saya lebih siap menghadapi tantangan masyarakat.',
                'status' => false
            ],
            [
                'nama_lengkap' => 'Fransiskus Mau',
                'avatar' => null,
                'tahun_lulus' => 2018,
                'pekerjaan' => 'Guru Sekolah Minggu',
                'content' => 'Sekolah ini bukan hanya tempat belajar, tapi juga membentuk karakter rohani saya.',
                'status' => false
            ],
            [
                'nama_lengkap' => 'Theresia Benu',
                'avatar' => null,
                'tahun_lulus' => 2022,
                'pekerjaan' => 'Mahasiswa Pascasarjana',
                'content' => 'Dosen-dosen di sini benar-benar peduli dan membimbing dengan sepenuh hati.',
                'status' => false
            ]
        ])->each(function ($testimoni) {
            Testimoni::create($testimoni);
        });
    }
}
