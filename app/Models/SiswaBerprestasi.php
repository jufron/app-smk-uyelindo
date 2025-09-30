<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiswaBerprestasi extends Model
{
    protected $table = 'siswa_berprestasi';

    protected $fillable = [
        'nama_lengkap',
        'kelas',
        'jenis_prestasi',
        'peringkat',
        'tahun',
        'foto',
        'tingkat',
        'nama_penyelenggara',
        'keterangan',
    ];
}
