<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\DateFormatCreatedAtAndUpdatedAt;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galeri extends Model
{
    use HasFactory, DateFormatCreatedAtAndUpdatedAt;

    protected $table = 'galeri_foto';

    protected $fillable = [
        'deskripsi',
        'foto',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    protected function fotoUrl(): Attribute
    {
        return Attribute::make(
            get: fn () =>  $this->attributes['foto'] && Storage::disk('public')->exists($this->attributes['foto'])
                            ? asset('storage/' . $this->attributes['foto'])
                            : asset('img/defaultsvg.svg')
        );
    }

    protected function deskripsiLimit(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->deskripsi
                            ? Str::limit(strip_tags($this->deskripsi), 100)
                            : '-',
        );
    }
}
