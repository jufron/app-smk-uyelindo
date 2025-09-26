<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
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

    protected function deskripsiLimit(): Attribute
    {
        return Attribute::make(
            get: fn () => Str::limit(strip_tags($this->deskripsi), 100),
        );
    }

}
