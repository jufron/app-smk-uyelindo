<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaftarSiswaBaru extends Model
{
    protected $table = 'daftar_siswa_baru';

    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'email',
        'nisn',
        'tanggal_lahir',
        'tempat_lahir',
        'jenis_kelamin',
        'agama',
        'alamat_siswa',
        'alamat_sekolah_sebelumnya',
        'anak_ke',
        'status_anak',
        'nomor_telepon_siswa',
        'jumlah_saudara_kandung',
        'tinggal_dengan',
        'nama_lengkap_wali_murid',
        'pekerjaan_wali_murid',
        'hubugan_dengan_siswa',
        'alamat_wali_siswa',
        'nomor_hp_wali',
        'nama_lengkap_ayah',
        'pekerjaan_ayah',
        'pendidikan_ayah',
        'nama_lengkap_ibu',
        'pekerjaan_ibu',
        'pendidikan_ibu',
        'nomor_telepon_orang_tua',
        'alamat_orang_tua'
    ];
}
