<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\DateFormatCreatedAtAndUpdatedAt;
use Illuminate\Database\Eloquent\Casts\Attribute;

class GuruAndStaf extends Model
{
    use DateFormatCreatedAtAndUpdatedAt;

    protected $table = 'guru_and_staf';

    protected $fillable = [
        'foto',
        'nama_lengkap',
        'nip',
        'nuptx',
        'ptx',
        'status_kewarganegaraan',
        'sk_pengangkatan',
        'lembaga_pengangkatan',
        'agama',
        'alamat',
        'rt',
        'rw',
        'nama_dusun',
        'desa_kelurahan',
        'kecamatan',
        'kode_pos',
        'telepon',
        'email',
        'sumber_gaji',
        'nama_ibu_kandung',
        'status_perkawinan',
        'nik'
    ];

    protected function fotoUrl(): Attribute
    {
        return Attribute::make(
            get: fn () =>  $this->attributes['foto'] && Storage::disk('public')->exists($this->attributes['foto'])
                            ? asset('storage/' . $this->attributes['foto'])
                            : asset('img/defaultsvg.svg')
        );
    }
}
