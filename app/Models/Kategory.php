<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\DateFormatCreatedAtAndUpdatedAt;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategory extends Model
{
    /** @use HasFactory<\Database\Factories\KategoryFactory> */
    use HasFactory, DateFormatCreatedAtAndUpdatedAt;

    protected $table = 'kategory';

    protected $fillable = ['nama', 'slug', 'deskripsi'];

    protected function slug() : Attribute
    {
        return Attribute::make(
            set: fn ($value, $attributes) => Str::slug($attributes['nama'])
        );
    }

    public function deskripsiLimit () : Attribute
    {
        return Attribute::make(
            get: fn () => Str::limit($this->deskripsi, 45, '...')
        );
    }
}
