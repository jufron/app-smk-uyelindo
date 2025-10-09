<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\DateFormatCreatedAtAndUpdatedAt;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiswaBerprestasi extends Model
{
    use HasFactory, DateFormatCreatedAtAndUpdatedAt;

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

    protected function fotoUrl(): Attribute
    {
        return Attribute::make(
            get: fn () =>  $this->attributes['foto'] && Storage::disk('public')->exists($this->attributes['foto'])
                            ? asset('storage/' . $this->attributes['foto'])
                            : asset('img/defaultsvg.svg')
        );
    }

    protected function keteranganimit(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->keterangan
                            ? Str::limit(strip_tags($this->keterangan), 100)
                            : '-',
        );
    }

}
