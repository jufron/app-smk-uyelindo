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
            ],
            [
                'nama_lengkap' => 'Andreas Nusa',
                'avatar' => null,
                'tahun_lulus' => 2021,
                'pekerjaan' => 'Guru Agama',
                'content' => 'Pengajaran yang diberikan membekali saya dengan nilai-nilai kehidupan yang kokoh.',
                'status' => true
            ],
            [
                'nama_lengkap' => 'Maria Sula',
                'avatar' => null,
                'tahun_lulus' => 2020,
                'pekerjaan' => 'Penulis Rohani',
                'content' => 'Lingkungan belajar yang mendukung membuat saya berkembang pesat di bidang saya.',
                'status' => true
            ],
            [
                'nama_lengkap' => 'Samuel Lopo',
                'avatar' => null,
                'tahun_lulus' => 2019,
                'pekerjaan' => 'Pendeta',
                'content' => 'Saya merasa sangat diberkati pernah belajar di kampus ini.',
                'status' => false
            ],
            [
                'nama_lengkap' => 'Veronika Bessi',
                'avatar' => null,
                'tahun_lulus' => 2023,
                'pekerjaan' => 'Aktivis Sosial',
                'content' => 'Ilmu yang saya dapatkan sangat berguna dalam pelayanan masyarakat.',
                'status' => true
            ],
            [
                'nama_lengkap' => 'Yohanes Tana',
                'avatar' => null,
                'tahun_lulus' => 2018,
                'pekerjaan' => 'Konselor',
                'content' => 'Kampus ini membentuk saya menjadi pribadi yang lebih peka terhadap sesama.',
                'status' => false
            ],
            [
                'nama_lengkap' => 'Helena Meta',
                'avatar' => null,
                'tahun_lulus' => 2022,
                'pekerjaan' => 'Staf Lembaga Non-Profit',
                'content' => 'Pengalaman belajar di sini sungguh berkesan dan membekas.',
                'status' => true
            ],
            [
                'nama_lengkap' => 'Petrus Laka',
                'avatar' => null,
                'tahun_lulus' => 2017,
                'pekerjaan' => 'Wiraswasta',
                'content' => 'Semua yang saya pelajari membantu dalam membangun bisnis berbasis nilai.',
                'status' => true
            ],
            [
                'nama_lengkap' => 'Agnes Mone',
                'avatar' => null,
                'tahun_lulus' => 2021,
                'pekerjaan' => 'Relawan Pendidikan',
                'content' => 'Kampus ini mengajarkan bukan hanya ilmu, tetapi juga kasih dan pengabdian.',
                'status' => false
            ],
            [
                'nama_lengkap' => 'Benyamin Saka',
                'avatar' => null,
                'tahun_lulus' => 2020,
                'pekerjaan' => 'Pengusaha Muda',
                'content' => 'Semangat dan dedikasi dosen sangat menginspirasi saya untuk terus maju.',
                'status' => true
            ],
            [
                'nama_lengkap' => 'Elisabeth Pono',
                'avatar' => null,
                'tahun_lulus' => 2019,
                'pekerjaan' => 'Guru TK',
                'content' => 'Kampus ini membentuk karakter saya dengan pendidikan berbasis kasih.',
                'status' => false
            ],
        ])->each(function ($testimoni) {
            Testimoni::create($testimoni);
        });
    }
}
