<?php

namespace Database\Seeders;

use App\Models\PertanyaanPendaftaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PertanyaanPendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // PertanyaanPendaftaran::factory(5)->create();

        collect([
            [
                'pertanyaan' => 'Bagaimana cara mendaftar sebagai siswa baru di sekolah ini?',
                'jawaban' => 'Calon siswa dapat mendaftar melalui formulir pendaftaran online di website kami atau datang langsung ke sekolah.'
            ],
            [
                'pertanyaan' => 'Apa saja persyaratan dokumen yang harus disiapkan untuk pendaftaran?',
                'jawaban' => 'Persyaratan umumnya adalah fotokopi ijazah terakhir, fotokopi Kartu Keluarga, akta kelahiran, dan pas foto berwarna.'
            ],
            [
                'pertanyaan' => 'Apakah ada biaya pendaftaran yang harus dibayarkan?',
                'jawaban' => 'Ya, ada biaya pendaftaran sebesar Rp200.000 yang dibayarkan saat mengisi formulir.'
            ],
            [
                'pertanyaan' => 'Kapan batas waktu terakhir pendaftaran siswa baru?',
                'jawaban' => 'Pendaftaran ditutup pada tanggal 31 Juli setiap tahunnya.'
            ],
            [
                'pertanyaan' => 'Bagaimana cara memilih jurusan atau program studi yang tersedia?',
                'jawaban' => 'Calon siswa dapat memilih jurusan saat mengisi formulir pendaftaran sesuai dengan minat dan bakat masing-masing.'
            ],
            [
                'pertanyaan' => 'Apakah tersedia beasiswa untuk siswa baru?',
                'jawaban' => 'Ya, kami menyediakan beberapa program beasiswa berdasarkan prestasi akademik maupun kondisi ekonomi keluarga.'
            ],
            [
                'pertanyaan' => 'Bagaimana cara mengikuti tes seleksi masuk?',
                'jawaban' => 'Setelah pendaftaran, calon siswa akan mendapatkan jadwal tes seleksi yang diinformasikan melalui email atau WhatsApp.'
            ],
            [
                'pertanyaan' => 'Apakah pendaftaran bisa dilakukan secara online atau harus datang langsung?',
                'jawaban' => 'Pendaftaran bisa dilakukan secara online melalui website resmi sekolah maupun secara langsung ke kampus kami.'
            ],
            [
                'pertanyaan' => 'Siapa yang bisa dihubungi jika ada kendala saat proses pendaftaran?',
                'jawaban' => 'Calon siswa bisa menghubungi panitia pendaftaran di nomor WhatsApp resmi sekolah atau email admin pendaftaran.'
            ],
            [
                'pertanyaan' => 'Bagaimana proses setelah saya berhasil mendaftar?',
                'jawaban' => 'Setelah mendaftar, calon siswa akan mengikuti tes seleksi, wawancara, kemudian pengumuman kelulusan akan diberitahukan via website dan email.'
            ],
        ])->each( function ($item) {
            PertanyaanPendaftaran::create($item);
        });
    }
}
