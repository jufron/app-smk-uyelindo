<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\DateFormatCreatedAtAndUpdatedAt;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimoni extends Model
{
    /** @use HasFactory<\Database\Factories\TestimoniFactory> */
    use HasFactory, DateFormatCreatedAtAndUpdatedAt;

    protected $table = 'testimoni';

    protected $fillable = [
        'avatar',
        'nama_lengkap',
        'tahun_lulus',
        'pekerjaan',
        'content',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    protected function avatarUrl(): Attribute
    {
        return Attribute::make(
            get: fn () =>  $this->attributes['avatar'] && Storage::disk('public')->exists($this->attributes['avatar'])
                            ? Storage::url($this->attributes['avatar'])
                            : asset('img/defaultsvg.svg')
        );
    }

    protected function namaLengkapLimit(): Attribute
    {
        return Attribute::make(
            get: fn () => strlen($this->getAttribute('nama_lengkap')) > 100 
                            ? substr($this->getAttribute('nama_lengkap'), 0, 100) 
                            : $this->getAttribute('nama_lengkap')
        );
    }
    
    protected function pekerjaanLimit(): Attribute
    {
        return Attribute::make(
            get: fn () => strlen($this->getAttribute('pekerjaan')) > 50 
                            ? substr($this->getAttribute('pekerjaan'), 0, 50) 
                            : $this->getAttribute('pekerjaan')
        );
    }
}
