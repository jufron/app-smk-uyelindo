<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiswaBerprestasi extends Model
{
    protected $table = 'siswa_berprestasi';

    protected $fillable = [
        'foto',
        'nama_lengkap',
        'kelas',
        'jenis_prestasi',
        'peringkat',
        'tahun',
        'tingkat',
        'nama_penyelenggara',
        'keterangan',
    ];
}
