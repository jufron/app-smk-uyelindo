<?php

namespace Database\Seeders;

use App\Models\PengaturanAplikasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaturanAplikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'key'   => 'sambutan_kepala_sekolah',
                'value' => 'Selamat datang di website resmi SMK Uyelindo Kupang. Sebagai kepala sekolah, saya merasa bangga menyambut Anda untuk mengenal lebih dekat lingkungan pembelajaran kami yang berbasis vokasi dan berorientasi pada dunia kerja. Kami berkomitmen mencetak lulusan yang unggul, terampil, dan siap bersaing di era industri modern.'
            ],
            [
                'key'   => 'nama_kepala_sekolah',
                'value' => 'Suryani Benga Tokan S.Kom'
            ],
            [
                'key'   => 'foto_kepala_sekolah',
                'value' => null
            ],
            [
                'key'   => 'sejarah',
                'value' => null
            ],
            [
                'key'   => 'visi_misi',
                'value' => null
            ],
            [
                'key'   => 'struktur_organisasi',
                'value' => null
            ],
            [
                'key'   => 'email',
                'value' => 'sekolah.example@gmail.com'
            ],
            [
                'key'   => 'telepon',
                'value' => '08123456789'
            ],
            [
                'key'   => 'telepon_whatsapp',
                'value' => '08123456789'
            ],
            [
                'key'   => 'facebook',
                'value' => 'https://facebook.com/sekolah.example'
            ],
            [
                'key'   => 'instagram',
                'value' => 'https://instagram.com/sekolah.example'
            ],
            [
                'key'   => 'youtube',
                'value' => 'https://youtube.com/sekolah.example'
            ],
            [
                'key'   => 'tik_tok',
                'value' => 'https://tiktok.com/@sekolah.example'
            ],
            [
                'key'   => 'brosur_pendaftaran',
                'value' => null
            ],
            [
                'key'   => 'tanggal_pendaftaran_gelombang_1_awal',
                'value' => null
            ],
            [
                'key'   => 'tanggal_pendaftaran_gelombang_1_akhir',
                'value' => null
            ],
            [
                'key'   => 'tanggal_pendaftaran_gelombang_2_awal',
                'value' => null
            ],
            [
                'key'   => 'tanggal_pendaftaran_gelombang_2_akhir',
                'value' => null
            ],
            [
                'key'   => 'tanggal_pendaftaran_gelombang_3_awal',
                'value' => null
            ],
            [
                'key'   => 'tanggal_pendaftaran_gelombang_3_akhir',
                'value' => null
            ],
            [
                'key'   => 'popup_pendaftaran',
                'value' => null
            ],
        ])->each( function ($item) {
            PengaturanAplikasi::create($item);
        });
    }
}
